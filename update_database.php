<?php
session_start();
include_once('database.php');
$_SESSION['tableID'] = 'books';
$tableName = 'books';
    $isAddition = $_GET["isAddition"];
    echo $isAddition;
    $bookTitle = filter_input(INPUT_POST, "TitleTextField");
    $bookAuthor = filter_input(INPUT_POST, "AuthorTextField");
    $bookPrice = filter_input(INPUT_POST, "PriceTextField");
    $bookGenre = filter_input(INPUT_POST, "GenreTextField");

// check if user is Adding a New Book
    if ($isAddition == "1") {
    echo  "here";
        $sql = "INSERT INTO books ( Title, Author, Price, Genre) 
VALUES ('$bookTitle', '$bookAuthor', '$bookPrice', '$bookGenre')";

        $db->exec($sql);
        echo "Record created successfully";
        /*//////////////////////*/
        /* FIX THIS MYSQL QUERY */
        /*//////////////////////*/


    } // else if user is Updating an Existing Book
    else {
        $bookID = filter_input(INPUT_POST, "IDTextField");


        /*//////////////////////*/
        /* FIX THIS MYSQL QUERY */
        /*//////////////////////*/
        $sql = "UPDATE books SET Title = '$bookTitle', Author = '$bookAuthor', Price = '$bookPrice', Genre = '$bookGenre'
 WHERE Id = $bookTitle "; // SQL statement

        $db->exec($sql);



}
/*
$statement->bindValue(':book_title', $bookTitle);
$statement->bindValue(':book_author', $bookAuthor);
$statement->bindValue(':book_price', $bookPrice);
$statement->bindValue(':book_genre', $bookGenre);
$statement->execute(); // run on the db server
$statement->closeCursor(); // close the connection
*/
//$conn = null ;
// redirect to index page
header('Location: index.php');
?>

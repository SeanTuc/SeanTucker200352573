<?php
session_start();
$servername = 'ca-cdbr-azure-central-a.cloudapp.net';
$dbname = 'videogamesdb';
$userName = 'b6ee96bd470785';
$password = 'dc381279';
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// setting conn attributes on how to handle mySQL returns;
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$isAddition = filter_input(INPUT_POST, "isAddition");
$bookTitle = filter_input(INPUT_POST, "TitleTextField");
$bookAuthor = filter_input(INPUT_POST, "AuthorTextField");
$bookPrice = filter_input(INPUT_POST, "PriceTextField");
$bookGenre = filter_input(INPUT_POST, "GenreTextField");

// check if user is Adding a New Book
if($isAddition == "1") {

    $sql = "INSERT INTO $tableName ( Title, Author, Price, Genre) 
VALUES ('$bookTitle', '$bookAuthor', '$bookPrice', '$bookGenre')";

    $conn->exec($sql);
    echo "Record created successfully";
/*//////////////////////*/
    /* FIX THIS MYSQL QUERY */
/*//////////////////////*/


}
// else if user is Updating an Existing Book
else {
$bookID = filter_input(INPUT_POST, "IDTextField");



/*//////////////////////*/
/* FIX THIS MYSQL QUERY */
/*//////////////////////*/
    $sql = "UPDATE $tableName SET Title = '$bookTitle', Author = '$bookAuthor', Price = '$bookPrice', Genre = '$bookGenre'
 WHERE Title = $bookTitle "; // SQL statement

    $conn->exec($sql);





}

/*$statement->bindValue(':book_title', $bookTitle);
$statement->bindValue(':book_author', $bookAuthor);
$statement->bindValue(':book_price', $bookPrice);
$statement->bindValue(':book_genre', $bookGenre);
$statement->execute(); // run on the db server
$statement->closeCursor(); // close the connection
*/
$conn = null ;
// redirect to index page
header('Location: index.php');
?>

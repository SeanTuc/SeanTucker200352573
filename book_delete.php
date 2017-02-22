<?php
session_start();
$tableName = $_SESSION['tableID'];
include_once('database.php');

//grabs usernameId from url;
$usernameID = $_GET["bookId"];
echo $usernameID;

if($usernameID != null) {
    // deletes row from table when usernameID is provided;

    $query = "DELETE FROM books WHERE Title = $usernameID";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    echo "deleted";
}




/*//////////////////////*/
/* YOUR CODE GOES HERE */
/*/////////////////////*/

// redirect to index page
header('Location: index.php');

?>

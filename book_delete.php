<?php
session_start();
$tableName = $_SESSION['tableID'];
include_once('database.php');

//grabs usernameId from url;
$usernameID = $_GET["bookId"];

if($usernameID != null) {
    // deletes row from table when usernameID is provided;
    $query = "DELETE FROM $tableName WHERE id = $usernameID ";
    $statement = $db->prepare($query);
    $success = $statement->execute();
    $statement->closeCursor();
    echo "deleted";
}




/*//////////////////////*/
/* YOUR CODE GOES HERE */
/*/////////////////////*/

// redirect to index page
//header('Location: index.php');

?>

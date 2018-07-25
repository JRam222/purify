<?php

    include_once "conn.php";
    // sql to delete a record
    
    $id = $_GET['id'];
        
    $sql = "DELETE FROM events WHERE id=$id";
        

    if ($mysqli->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }


    $mysqli->close();

?>
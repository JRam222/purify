<?php

/*
//for xampp
$servername = "localhost";
$username = "root";
$password ="";
$db = "purify";
*/

//for live
$servername = "localhost";
$username = "purifyTeam";
$password ="Spider22#";
$db = "purify";

// Create connection
$mysqli = new mysqli($servername, $username, $password,$db);
if ($mysqli->connect_errno) {

   echo "Connect failed ".$mysqli->connect_error;

   exit();
}

?>
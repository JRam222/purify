<?php

include_once "conn.php";

$name = mysqli_real_escape_string($mysqli, $_REQUEST['name']);
$startdate = mysqli_real_escape_string($mysqli, $_REQUEST['startdate']);
$enddate = mysqli_real_escape_string($mysqli, $_REQUEST['enddate']);
$starttime = mysqli_real_escape_string($mysqli, $_REQUEST['starttime']); 
$endtime = mysqli_real_escape_string($mysqli, $_REQUEST['endtime']); 
$color = mysqli_real_escape_string($mysqli, $_REQUEST['color']); 
$url = mysqli_real_escape_string($mysqli, $_REQUEST['url']); 

// attempt insert query execution
$sql = "INSERT INTO events (name, startdate, enddate,starttime,endtime,color,url) VALUES ('$name', '$startdate', '$enddate', '$starttime', '$endtime', '$color', '$url')";
if(mysqli_query($mysqli, $sql)){
    header("Location: index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// close connection
mysqli_close($mysqli);
?>

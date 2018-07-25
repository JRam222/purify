<?php

include_once 'conn.php';

$sql ="SELECT * from events";

$result = mysqli_query($mysqli,$sql);
$resultCheck = mysqli_num_rows($result);

?>
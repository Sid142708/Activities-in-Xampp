<?php

include 'connection.php';
error_reporting(0);
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM info WHERE ID=$ID");

header("location:profile.php");
?>
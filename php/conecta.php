<?php
$servername = "localhost";
$database = "test";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8");
//mysqli_close($con);
?>
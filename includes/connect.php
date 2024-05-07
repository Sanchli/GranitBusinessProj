<?php
$username = "root";
$password = "";
$database = "mydatabase";

$conn = mysqli_connect("localhost", $username, $password, $database);

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
else{
    echo "<br>";
    echo "You have Connect to the database";
    echo "<br>";
}
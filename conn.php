<?php

//Database connection config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

//Creating a connection
$conn = new mysqli($servername, $username , $password , $dbname );

//Checking the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected Successfully";
}




?>
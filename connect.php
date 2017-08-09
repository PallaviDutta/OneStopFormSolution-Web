<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_project";


//echo "$name\n$message\n$phone\n$time\n$date";

//echo "$message"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
global $conn;

// Check connection
if ($conn->connect_error) {
    echo "Submition error";
    die("Connection failed: " . $conn->connect_error);
} 

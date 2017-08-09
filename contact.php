<?php

session_start();

if( isset($_SESSION['user']) ){
		

include_once("connect.php");
$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Subject = $_POST["Subject"];
$Message = $_POST["message"];

$sql = "INSERT INTO contact (Name,Email,Subject,Message)
VALUES ('$Name', '$Email', '$Subject','$Message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: contactus.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
else{
     header('Location: login11.php');
}

?>
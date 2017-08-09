<?php
include_once("connect.php");
$Firstname = $_POST["first"];
$Lastname = $_POST["last"];
$Email = $_POST["email"];
$Password = $_POST["password"];


$sql1 = "Select * FROM students where email='$Email'";
$l1=$conn->query($sql1);
if ($l1->num_rows > 0)
{
	 header('Location: reg1.html'); 
}
else
{
$sql = "INSERT INTO students (firstname,lastname,email,password)
VALUES ('$Firstname', '$Lastname', '$Email','$Password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: login1.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>



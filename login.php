<?php
include_once("connect.php");
session_start();
$result = array();
$result["success"]=false;
$result["message"]="Username or Password incorrect";


if( isset($_POST['sess_id']) ) {
	$sess_id=$_POST['sess_id'];
	session_id($sess_id);
	
	if( isset($_SESSION['user']) )
		$result["message"]=$_SESSION['user'];

}
else {
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM students where email ='$email' and password = '$password'";
	$l=$conn->query($sql);
	if ($l->num_rows > 0) {
		$result["success"]=true;
		$result["message"]="Login Successful";
		$result["sess_id"]=session_id();

		// $result["user"]=$l['first'];

		$_SESSION['user']=$email;
		header('Location: projects.php');
	}else
	{
		
		header('Location: login_message.html');

	}
}

$conn->close();

echo json_encode($result);
//echo "Adfaf";

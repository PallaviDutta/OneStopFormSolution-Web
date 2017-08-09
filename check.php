<?php
session_start();
	if( isset($_SESSION['user']) ){
		header('Location: proj1.php');
	}
	else{
		header('Location: login.html');
	}
		
	?>
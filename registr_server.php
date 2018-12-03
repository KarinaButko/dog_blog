<?php
include 'connect.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$result = $pdo->query("INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')");

	if($result){
		header('Location: login.php');
	} else {
		header('Location: registr.php');
	}
}
	?>
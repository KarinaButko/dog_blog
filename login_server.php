<?php
session_start();
include 'connect.php';
if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
	$result = $pdo->query("SELECT * FROM users WHERE username='$username' and password='$password'");

	if  ($result) {	
		$_SESSION['username'] = $username;
		header('Location: index.php');
	} else {
		header('Location: login.php');
	}
}


?>
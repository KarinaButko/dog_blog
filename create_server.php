<?php
include 'connect.php';
if (!empty($_FILES["img"])) {
	$title = $_POST['title'];
	$descript = $_POST['descript'];
	$img = "images/" . $_FILES["img"]["name"];
	move_uploaded_file($_FILES["img"]["tmp_name"], $img);
	$result = $pdo->query("INSERT INTO news (title, descript, img) VALUES ('$title','$descript','$img')");

	if($result){
		header('Location: index.php');
	} else {
		header('Location: create.php');
	}
}
?>
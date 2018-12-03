<?php
$dsn = "mysql: host = loclahost; dbname=dog_blog; charset=utf8";
$opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
       ];
$pdo = new PDO($dsn, 'root', '', $opt);
?>

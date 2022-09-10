<?php

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=tasklist','tasklist','password_mysql');
	echo "OK";
}
catch(PDOException $e)
{
	$error = "Error during a connection with a database";
	require_once "error.html.php";
}



?>
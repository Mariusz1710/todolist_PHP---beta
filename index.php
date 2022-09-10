<?php

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=tasklist','tasklist','password_mysql');
}
catch(PDOException $e)
{
	$error = "Error during a connection with a database";
	require_once "error.html.php";
}

try
{
	$sql = "SELECT * FROM tasks";
	$result = $pdo -> query($sql);


	foreach($result as $row)
	{
		$tasks[] = array("id" => $row['id'],"task" => $row['task'],"status" => $row['status'],"date" => $row['date']);
	}

	require_once "tasks.html.php";
}
catch(PDOException $e)
{
	$error = "Error during downloading data from a database";
	require_once "error.html.php";
}

?>
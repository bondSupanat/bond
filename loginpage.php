<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project_oo";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if($conn->error)
{
	echo "Fail to connect";
}


	$username = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "SELECT  * FROM Member WHERE username = '".$username."' AND password = '".$pass."'";
	$instruct = $conn->query($sql) or die($conn->error);
	$check = $instruct->fetch_array();
	if($check)
	{
		echo "Success Login"; ?> <br> 
		<a href="shopping.php">go Shopping Online</a> 
	<?
	}
	else
	{
		echo "Wrong User name & password !!"; ?> <br> 
		<a href=javascript:history.back(1)>go back</a> 
	<?
		
	}


?>
	
	
	
</body>
</html>
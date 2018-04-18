


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

		$email = $_POST['email'];
	
	
	
		$sql7 = "INSERT INTO Subscribe_Promotion (email)
  		values ( '$email' )";
		
		  	$conn->query($sql7);
	
	echo "thank you !!";  ?> <br> <?
	echo "Subscribe and be the first to get great deals!"; ?> <br> 
		<a href=javascript:history.back(1)>go back</a> 
	<?


?>
	
	
	
</body>
</html>
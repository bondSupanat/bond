<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$adress = $_POST['address'];
$username	= $_POST['username'];
$password = $_POST['pass'];

 if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project_oo";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	
	
if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
	
	$sql2 = "SELECT * FROM Member;";
	
	$qry = mysqli_query($conn,$sql2);
	  $class = new SignIn;
	while($data2 = mysqli_fetch_array($qry)){
	 // $user = $data2['username'] ;
	
		$result1 = $class->checkUser($data2['username'] ,$username);
		$result2 = $class->checkEmail($data2['email'] ,$email);
		if($result1 == 0 ){
			break;
		}
		if($result2 == 0){
			break;
		}
			//echo "<script type = 'text/javascript'>window.open(\"sign_up.html\",\"_self\")</script>";
		
		//echo $email2;
	}
		
	  	if($result1 == 0){
		  	echo "<script type = 'text/javascript'>window.open(\"sign_up.html\",\"_self\")</script>";
		  
		}else if($result2 == 0){
		  	echo "<script type = 'text/javascript'>window.open(\"sign_up.html\",\"_self\")</script>";
	  	}else{
			//$a = "up";
		  	$sql = "INSERT INTO Member (fullName , email , address ,username, password)
  			values ('$fullName','$email','$adress','$username','$password')";
		  	//echo "<script type = 'text/javascript'>window.open(\"sign_in.html\",\"_self\")</script>";;
			//$a = "in";
		    if ($conn->query($sql)){
	  			//echo "window.open(\"login.html\",\"_self\");";
	  			echo "<script type = 'text/javascript'>window.open(\"sign_in.html\",\"_self\")</script>";
			}else{
    			echo "Error: ". $sql ."
				". $conn->error;
  			}
  			$conn->close();
	  }
		//echo "<script type = 'text/javascript'>window.open(\"sign_in.html\",\"_self\")</script>";
	


}
}
else{
  echo "Password should not be empty";
  die();
}
 }
 else{
  echo "Username should not be empty";
  die();
 }


class SignIn{
	public function checkUser($user1 , $user2){
		if($user1 == $user2){
			return 0;
		}
		else{
			return 1;
		}
		//echo $user1 , $user2;
	}
		public function checkEmail($mail1 , $mail2){
		if($mail1 == $mail2){
			return 0;
		}
		else{
			return 1;
		}
		//echo $user1 , $user2;
	}
}
?>
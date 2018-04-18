<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?
	
	$product_id = $_POST['product_id'];
	$product_name = $_POST['product_name'];
	$product_categorie = $_POST['product_categorie'];
	$product_description	= $_POST['product_description'];
	$price = $_POST['price'];
	$stock = $_POST['stock'];
	$filebutton = $_POST['filebutton'];
	


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project_oo";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	
	
		$sql = "INSERT INTO Product ( id_Product,  nameProduct, type ,description, price,countProduct,img_product)
  			values ('$product_id','$product_name','$product_categorie','$product_description','$price','$stock','$filebutton')";
		  	//echo "<script type = 'text/javascript'>window.open(\"sign_in.html\",\"_self\")</script>";;
			//$a = "in";
		    if ($conn->query($sql)){
	  			//echo "window.open(\"login.html\",\"_self\");";
	  			echo "Add Product";
				?><br><a href=javascript:history.back(1)>go back</a> <?
			}else{
    			echo "Error: ". $sql ."
				". $conn->error;
  			}
	
	
	
	
	?>
	
	
	
	
<body>
</body>
</html>
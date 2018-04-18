
	
<!doctype html>
<?php

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



?>
<html>
<head>
<meta charset="UTF-8">
<title>eCommerce template By Adobe Dreamweaver CC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="eCommerceAssets/styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
<div id="mainWrapper">
  <header> 
    <!-- This is the header content. It contains Logo and links -->
   <a href = "shopping.php"><div id="logo"> <!-- <img src="logoImage.png" alt="sample logo"> --> 
      <!-- Company Logo text --> HelloWorld</div></a>
    <div id="headerLinks"><a href="index.php" title="Login/Register">back to Shopping</a>
  </header>
 
  <section id="offer"> 
    <!-- The offer section displays a banner text for promotions -->
    <h2>Admin Only !</h2>
    <p> </p>
  </section>
	  
	  
  <div id="content">
    <section class="sidebar"> 
      
      
    </section>
    
	  
	  <section class="mainContent">
	
		  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" method="post" action="insertCode.php">
<fieldset>

<!-- Form Name -->
<legend>PRODUCTS</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>  
  <div class="col-md-4">
  <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="product_categorie" class="form-control">
		
		<?
			  $sql1 = "SELECT * FROM Category;";
	
		$qry1 = mysqli_query($conn,$sql1);
	  	//$data2 = mysqli_fetch_array($qry);
		
		while($data1 = mysqli_fetch_array($qry1)){
			  ?>
            <!-- List of links under menuset 1 -->
            <li><a href="category.php?nameC=<? echo $data1['id_Category']; ?> "><? echo $data1['name_Category'] ?></a></li>
            <option name = "category" value="<? echo $data1['id_Category']; ?>"><? echo $data1['name_Category'] ?></option>
			  <? } ?>
		
    
    </select>
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount">PRICE</label>  
  <div class="col-md-4">
  <input id="percentage_discount" name="price" placeholder="PRICE" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="stock_alert">STOCK </label>  
  <div class="col-md-4">
  <input id="stock_alert" name="stock" placeholder="STOCK " class="form-control input-md" required="" type="text">
    
  </div>
</div>

 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">image</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
  </div>

</fieldset>
</form>
		  <br><br><br><br>
		  
<form class="form-horizontal" action = "insertCategory.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>CATEGORY</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="category_id">CATEGORY ID</label>  
  <div class="col-md-4">
  <input id="product_id" name="category_id" placeholder="CATEGORY ID" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="category">CATEGORY NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="category_name" placeholder="CATEGORY NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
  </div>

</fieldset>
</form>  
		  
		  
		  
	</section>
  </div>
  <footer> 
    <!-- This is the footer with default 3 divs -->
    
      
    
    
		<br>
  </footer>
</div>
</body>
</html>





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
    <div id="headerLinks"><a href="index.php" title="Login/Register">Log Out</a><a href="favorite.php" title="Favorites">Favorites</a><a href="cart.php" title="Cart">Cart</a></div>
  </header>
 
  <section id="offer"> 
    <!-- The offer section displays a banner text for promotions -->
    <h2>New Shopping Online !!</h2>
    <p>REALLY AWESOME DISCOUNTS </p>
  </section>
  <div id="content">
    <section class="sidebar"> 
      <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
	<form method="post" action="search.php">
      <input type="text"  id="search" name="search" placeholder="Search Name Product">
		
			<button >
					<font face="'Montserrat', sans-serif" color= #919191 size = 3 > Search </font>
			</button>
			
		</form>
		
			
		
      <div id="menubar">
        <nav class="menu">
          <h2><!-- Title for menuset 1 --> Category</h2>
          <hr>
          <ul>
			  <?
			  $sql3 = "SELECT * FROM Category;";
	
		$qry2 = mysqli_query($conn,$sql3);
	  	//$data2 = mysqli_fetch_array($qry);
		
		while($data3 = mysqli_fetch_array($qry2)){
			  ?>
            <!-- List of links under menuset 1 -->
            <li><a href="category.php?nameC=<?  echo $data3['id_Category']; ?>" title="Link"><? echo $data3['name_Category'] ?></a></li>
            
			  <? } ?>
          </ul>
        </nav>
       
      </div>
    </section>
    <section class="mainContent">
		<font face="'Montserrat', sans-serif" color= #343434 size = 3 >
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

		?>    <h1>favorite</h1>  <?
		if(empty($_GET['id'])){
			//echo "eiei";
		}else{
			$id2 = $_GET['id'];
			$sql3 = "SELECT  * FROM Like_Product WHERE ID_product = '".$id2."'";
			$qry3 = mysqli_query($conn,$sql3);
			$data = mysqli_fetch_array($qry3);
			
			if(empty($data['ID_product'])){
				$sql7 = "INSERT INTO Like_Product (ID_product)
  				values ( '$id2' )";
				$conn->query($sql7);
				?>    <h3> Add favorite !</h3>  <?
			}else{
				
			}
	}
	
	?>
	
	<table width="750" border="1">

<tr>

<th width="91"> <div align="center">ProductID </div></th>
<th width="198"> <div align="center">Name </div></th>
<th width="97"> <div align="center">Price </div></th>
<th width="30"> <div align="center">Delete </div></th>
</tr>

	<?
	

	$sql2 = "SELECT  * FROM Like_Product";
	$qry2 = mysqli_query($conn,$sql2);
	
	
	while($data2 = mysqli_fetch_array($qry2)){
		$id = $data2['ID_product'];
		
		$sql = "SELECT  * FROM Product WHERE id_Product = '".$id."'";
	
		$qry = mysqli_query($conn,$sql);
		
		$data3 = mysqli_fetch_array($qry);
		
		?> <tr> 
		<td><div align="center"><? echo $data3['id_Product'] ; ?> </div></td> 
		<td><? echo $data3['nameProduct'] ; ?> </td> 
		<td><div align="center"><? echo $data3['price']; ?> </div></td> 
		<td align="center"><a href="delete_favorite.php?CusID=<?php echo $data3['id_Product'] ;?>">Delete</a></td>
		</tr>
		
		<?
	}	

?>
		
		
		</table>
			<br>
		<a href="shopping.php">go home</a> 
		</font>
		
		
		
		
		
		
		
		
    </section>
  </div>
  <footer> 
    <!-- This is the footer with default 3 divs -->
    
      <p>
		  <font face="'Montserrat', sans-serif" color= #ea576b size = 3 ><b><u>Exclusive Deals and Offers!</u></b>Subscribe and be the first to get great deals!</font> 
		
	  </p>
      <form method="post" action="subscribe.php">
        <input type="text"  id="search2" name="email" placeholder="E-mail">
        <button > <font face="'Montserrat', sans-serif" color= #919191 size = 1 > Sign Me up </font> </button>
		  
      </form>
    
    
		<br>
  </footer>
</div>
</body>
</html>

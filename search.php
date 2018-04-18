
	
	<?
		$search = $_POST['search'];
	
	

	
	?>

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

	//$proid2 = $_GET['proId'];

	$sql3 = "SELECT * FROM Product where nameProduct = '$search';";
	$qry = mysqli_query($conn,$sql3);

	$data3 = mysqli_fetch_array($qry);
	//echo $data3['nameProduct'];
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
    <div id="headerLinks"><a href="index.php" title="Login/Register">Log Out</a><a href="favorite.php" title="Favorites">Favorites</a><a href="#" title="Cart">Cart</a></div>
  </header>
 
  <section id="offer"> 
    <!-- The offer section displays a banner text for promotions -->
    <h2>New Shopping Online !!</h2>
    <p>REALLY AWESOME DISCOUNTS </p>
  </section>
  <div id="content">
    <section class="sidebar"> 
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
			  $sql6 = "SELECT * FROM Category;";
	
		$qry6 = mysqli_query($conn,$sql6);
	  	//$data2 = mysqli_fetch_array($qry);
		
		while($data6 = mysqli_fetch_array($qry6)){
			  ?>
            <!-- List of links under menuset 1 -->
            <li><a href="#" title="Link"><? echo $data6['name_Category'] ?></a></li>
            
			  <? } ?>
          </ul>
        </nav>
       
      </div>
    </section>
   
	  <? if(empty($data3)){ ?>
	  <br>
	  		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font face="'Montserrat', sans-serif" color= #919191 size = 8 ><? echo $search ?></font> <br>
	  		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font face="'Montserrat', sans-serif" color= #919191 size = 4 >No results found.</font> <br>
	  		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="shopping.php"><font face="'Montserrat', sans-serif" color= #919191 size = 2 >go home</font> </a>
	<?	}else{
	  ?>
	  
	  <section class="mainContent">
	    <div class="productRow">
		   
          <p><img src="eCommerceAssets/images/<? echo $data3['img_product'] ?>" width="400" height="396" alt=""/> 
            <br>
            <font face="'Montserrat', sans-serif" color= #919191 size = 10 ><? echo $data3['nameProduct']?></font> <br>
            <font face="'Montserrat', sans-serif" color= #919191 size = 2 >ID : <? echo $data3['id_Product']?></font> <br>
            <font face="'Montserrat', sans-serif" color= #919191 size = 2 >Category : <? echo $data3['type'];
				
				$type = $data3['type'];
				  	$sql4 = "SELECT * FROM Category where id_Category = '$type';";
				  	$qry4 = mysqli_query($conn,$sql4);
				  
				  	$typeName =  mysqli_fetch_array($qry4);
				  
					echo $typeName['name_Category'];
				
				
				?></font> <br>
            <font face="'Montserrat', sans-serif" color= #919191 size = 2 >Count : <? echo $data3['countProduct'];?></font> <br>
            <font face="'Montserrat', sans-serif" color= #919191 size = 2 >Description : </font> <br>
            <font face="'Montserrat', sans-serif" color= #919191 size = 2 ><? echo $data3['description']?></font> <br>
            <br>
          <font face="'Montserrat', sans-serif" color= #919191 size = 4 >Price : <? echo $data3['price']?></font> </p>
          <p>&nbsp;</p>
          <p><br>
            
            <article class="productInfo2">
              <input type="button" name="button" value="Add to Cart" class="CartButton">
				
				
				
			<input type="button" name="button" value="Favorite" class="favoButton"><br>
				
             
            </article>
			<a href=javascript:history.back(1)><font face="'Montserrat', sans-serif" color= #919191 size = 2 >go back</font> </a> 
			 
          </p>
        </div>
	
	
    </section>
	<? } ?>
	
  </div>
  <footer> 
   <p>
		  <font face="'Montserrat', sans-serif" color= #ea576b size = 3 ><b><u>Exclusive Deals and Offers!</u></b>Subscribe and be the first to get great deals!</font> 
		
	  </p>
      <form method="post" action="subscribe.php">
        <input type="text"  id="search2" name="email" placeholder="E-mail">
        <button > <font face="'Montserrat', sans-serif" color= #919191 size = 1 > Sign Me up </font> </button>
		  
      </form>
  </footer>
</div>
</body>
</html>


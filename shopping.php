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
		<?   
		$sql2 = "SELECT * FROM Product;";
	
		$qry = mysqli_query($conn,$sql2);
	  	//$data2 = mysqli_fetch_array($qry);
		
		while($data2 = mysqli_fetch_array($qry)){
	 
	
		?>
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/<? echo $data2['img_product'];?>"></div>
          <p class="price"><? echo $data2['price'];?> Baht</p>
          <p class="productContent"><? echo $data2['nameProduct'];?> </p>
          <a href="productpage.php?proId=<? echo $data2['id_Product'];?>"><input type="button" name="button" value="Buy" class="buyButton"></a>
        </article>
		  
        <article class="productInfo"><!-- Each individual product description -->
			<?
				$data2 = mysqli_fetch_array($qry); 
				if(empty($data2)) break;
			?>
          <div><img alt="sample" src="eCommerceAssets/images/<? echo $data2['img_product'];?>"></div>
          <p class="price"><? echo $data2['price'];?> Baht</p>
          <p class="productContent"><? echo $data2['nameProduct'];?> </p>
          <a href="productpage.php?proId=<? echo $data2['id_Product'];?>"><input type="button" name="button" value="Buy" class="buyButton"></a>
        </article>
          <article class="productInfo"><!-- Each individual product description -->
			<?
				$data2 = mysqli_fetch_array($qry); 
				if(empty($data2)) break;
			?>
          <div><img alt="sample" src="eCommerceAssets/images/<?  echo $data2['img_product'];?>"></div>
          <p class="price"><? echo $data2['price'];?> Baht</p>
          <p class="productContent"><? echo $data2['nameProduct'];?> </p>
          <a href="productpage.php?proId=<? echo $data2['id_Product'];?>"><input type="button" name="button" value="Buy" class="buyButton"></a>
        </article>
      </div>
     <?}?>
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

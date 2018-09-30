<?php
// Start the session
	session_start();
	$total=array();
    $detail=$_SESSION["detail1"];

    if(isset($_POST['Confirm']))
	{
    	$No_buy=$_POST['no_buy'];

	    	$No_buy=$_POST['no_buy'];
	    	include 'db_connection.php';
		    $sql = "SELECT * FROM product where Model_No='$detail' ";
		    if($result = mysqli_query($con, $sql))
		    {
		        if(mysqli_num_rows($result) > 0)
		        {
		            while($row = mysqli_fetch_array($result))
		            {
		                if($No_buy<=$row[2])
		                {
		                	$total_cost=$No_buy*$row[1];$newbuy=$row[13]+$No_buy;$new_price=$row[2]-$No_buy;
		                	$sql2= "UPDATE product set $row[13]=$newbuy,$row[2]=$new_price,
		                	 where Model_No='$detail' ";
		                	 if($result1= mysqli_query($con, $sql2))
		    				{
		            			echo "Records Updated.";
		    				}
		    				else
		    				{
		            			echo "Records Not Updated.";
		    				}
		                }
		            }
		            mysqli_free_result($result1);
		        } 
		        else
		        {
		            echo "No records matching your query were found.";
		        }
		    } 
		    else
		    {
		        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
		    }
		    //echo "Total Cost: ".$total_cost;
		    $total['totalcost']=$total_cost;
		}
	
	

?>

<!DOCTYPE HTML>
<head>
<title>Store Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>
  <div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><button type="button">Search</button> 
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Cart</span>
								<span class="no_product">(empty)</span>
							</a>
						</div>
			      </div>
		   <div class="login"><a href="cus_login.php">Login</a></div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="products.html">Products</a> </li>
	  <li><a href="topbrands.html">Top Brands</a></li>
	  <li><a href="Cart.php">Cart</a></li>
	  <li><a href="contact.html">Contact</a> </li>
	  <div class="clear"></div>
	</ul>
</div>
<br><br><br>

<form method="post">
    <?php 
    echo $detail;
     ?>
	<p><br>Your Cart
    <input type="number" name="no_buy"><br>
    <input type="reset" name="Reset">
    <input type="submit" name="Confirm" value="Confirm"></p>
    <p>
    	Total Cost: <?php echo $total['totalcost'] ;?>
    </p>
    
</form>


<br>
<br>
<br>
<br>
<br>
<br>

   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#"><span>Advanced Search</span></a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="#"><span>Contact Us</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="faq.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html"><span>Site Map</span></a></li>
						<li><a href="preview.html"><span>Search Terms</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.html">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="faq.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+88-01713458599</span></li>
							<li><span>+88-01813458552</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
			<marquee>
				<p>A Backbencher's Project &amp; All rights Reseverd </p>
			</marquee>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
</body>
</html>

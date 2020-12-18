<?php 

require_once('database.php');

$queryProducts = 'SELECT * FROM PRODUCT ORDER BY PRODUCT_ID';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
?>





<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Skin Product Name</title>
		<script type="text/javascript" src="js/index.js"></script>
		<link rel="stylesheet" href="css/index.css">
		<link rel="shortcut icon" href=" img/favicon.ico"/>
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>	

		<style>
  		<?php include "css/product.css" ?>
		</style>
	</head>
	<body>	
		<header>
			<div class="hero-image">
				<nav>
					<div class="mobileShow">
						<div class="Mcontainer">
							<label class ="logo" style="padding-right: 10px;">CMS Skin</label>
							<nav class="Mnavbar">
								<div class="hamburger-menu">
									<div class="line line-1"></div>
									<div class="line line-2"></div>
									<div class="line line-3"></div>
								</div>
								<ul class="Mnav-list">
									<li class="Mnav-item"><a href="index.php" class="Mnav-link">Home</a></li></br>
									<li class="Mnav-item"><a href="product.html" class="Mnav-link">Product</a></li></br>  
									<li class="Mnav-item"><a href="about.html" class="Mnav-link">About</a></li></br>  
									<li class="Mnav-item"><a href="contact.html" class="Mnav-link">Contact</a></li>  
								</ul>
							</nav>
						</div>
					</div>
					<div class="mobileHide">
						<label class ="logo">CMS Skin Care</label>
							<ul>
								<li><a class="active" href="index.php">Home</a></li>
								<li><a href="product.html">Product</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
					</div>
				</nav>
				<div class="mobileHide">
					<div class="transparentbackground">
						<div class="header-textbox">
							<h1><span style=color:#08c9b0>Organic</span> Skin Care Products</h1>
						</div>
					</div>
				</div>
			</div>
		</header></br>
	<div class="mobileHide">
	<div class="container">
		<section class="Middle">
			<h3>Put Good In, Get Good Out</h3>
			<p>CMS Skincare mixes science and nature to deliver the most potent skin care products. Most of our products are formulated using top skin care, high-end, domestic and imported ingredients.</p>
		</section></br>
	</div>
	</div>


	<div class="mobileShow">
		<div class="container">
			<section class="Middle">
				<h3>Put Good In,</br> Get Good Out</h3></br>
				<a href="about.html" class="nav-link">Learn More</a></br>  
			</section>
		</div>
	</div>
		<section class="productdisplay">
			<div class="mobileShow">
				<div id ="banner">
					<div class="img">
						<div class="slide-controls">
							<button id="prev-btn" onclick="autoPlay();">
								<i class="fas fa-chevron-left" ></i>
							</button>
							<button id="next-btn">
								<i class="fas fa-chevron-right"></i>
							</button>
						</div>
						<div class="Mproduct">
							<div class="imga active">
								<img src="img/moisturizer.jpg" alt="Face Moisturizer" style="width:100%; ">
								<h1>Hydrating Face Moisturizer</h1>
								<p class="price">$25.00</p>
								<p>This moisturizer uses aloe, chamomile, and hyaluronic acid to bring hydration back to your skin, leaving your face feeling revitalized and refreshed.</p>
								<p><button>Add to Cart</button></p>
							</div>
						</div>
						<div class="Mproduct">
							<div class="imga">
								<img src="img/cream.jpg" alt="Nightwear Cream" style="width:100%">
								<h1>Detox Nightwear Cream</h1>
								<p class="price">$30.00</p>
								<p>Using lavender and peony, your skin will be detoxed overnight, leaving your face feeling reenergized and cool in the morning.</p>
								<p><button>Add to Cart</button></p>
							</div>
						</div>
						<div class="Mproduct">
							<div class="imga">
								<img src="img/gel.jpg" alt="Eye Gel" style="width:100%">
								<h1>Cucumber Herbal Eye Gel</h1>
								<p class="price">$45.00</p>
								<p>This fresh and calmning eye gel uses hyaluronic acid, shea butter, and botanical extracts to rid your undereyes of those pesky dark circles.</p>
								<p><button>Add to Cart</button></p>
							</div>
						</div>
					</div>

				
				</div>
			</div>
			<div class="mobileHide" style = "padding-left: 200px;">
				
		<?php foreach ($products as $product) : ?>
			<div class="product" style = "display: inline-block; align-items:center;">
		    	<img src="img/cream.jpg" alt="Nightwear Cream" style="width:100%">
		    	<h1><?php echo $product['PRODUCT_NAME']; ?></h1> 
		    	<p class="price">$<?php echo $product['PRICE']; ?></p>
				<p><?php echo $product['PRODUCT_DESCRIPTION']; ?></p>
				<p><button>Add to Cart</button></p></br>
        	</div>
		<?php endforeach ?>

		</section>
		<div class="mobileHide">
		<div class="container">
			<section class="Middle" style="background-color: #EEBAB2;  padding-bottom: 0px;">
				<h3>Perfectly Paired</h3>
				<p>Our skin care is perfectly paired with your skin to leave it feeling rejuvenated and refreshed. Both of our organic products are light and cooling on your skin, so it won't feel weighed down by the product at hand. Enjoy!</p>
			</section>
		</div>
		</div>
		<section class="CardSection">
			<div class="card" id="card1"
			ontouchstart="c1handleTouchStart(event)"
			ontouchmove="c1handleTouchMove(event)"
			ontouchend="c1handleTouchEnd(event)">
				<div class="card-image"></div>
				<div class="card-text">
					<h2>Feel The Shine</h2>
					<p>Decrease the appearance of eye fatigue, puffiness and dark circles. Reward your skin with products that improve the appearance of your skin for a supple, healthier-look. Dewy, plump, and youthful skin is now officially within reach.</p>
				</div>
				<div class="card-stats"></div>
			</div>
			<div class="card" id="card2"
			ontouchstart="c2handleTouchStart(event)"
			ontouchmove="c2handleTouchMove(event)"
			ontouchend="c2handleTouchEnd(event)">
				<div class="card-image card2"></div>
				<div class="card-text">
					<h2>Even at Night!</h2>
					<p>Nighttime moisturizers are taking over the marketplace and redefining the meaning of beauty sleep. This lightweight smoothing cream visibly rejuvenates skin texture, nourishing the skin with the abundance of vitamins.</p>
				</div>
				<div class="card-stats"></div>
			</div>
		</section>

		<footer>
			<p>Organic Skin Care</p>
			<p> © 2020 CMS Skin Care</p>
		</footer>

		<script src="script.js"></script>
		<script src="scroll.js"></script>

	</body>
</html>
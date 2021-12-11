<!doctype html>
<html lang = "fa">
	<head>
		<title>Dire|Home</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link
			rel="stylesheet"
			href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
		/>
		<link rel="stylesheet" href="style.css">
		<style>
		</style>
	</head>
	<body >
        <h1>خانه</h1>
	
		  <div class="swiper">
 		 <!-- Additional required wrapper -->
 			<div class="swiper-wrapper">
			 <?php
					foreach( $productList as $product ){
						echo'<div class = "swiper-slide">';
						include 'templates/productCard.php';
						echo '</div>';
					}
				?>

  			</div>
 		 <!-- If we need pagination -->
  		<div class="swiper-pagination"></div>

  			<!-- If we need navigation buttons -->
 		<div class="swiper-button-prev"></div>
  		<div class="swiper-button-next"></div>


		<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
		<script src="assets/Main.js"></script>
	</body>
</html>
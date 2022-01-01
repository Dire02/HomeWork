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
        <header>
		<img src="assets/images/Banner2.jpg" alt="Home" class=" banner" title="Home"  >
		</header>
	


		<div class="container">
 		<div class="grid-container">
		<div class="swiper">
 		 <!-- Additional required wrapper -->
 			<div class="swiper-wrapper">
			 <div class="swiper-slide">
				<img src="assets/images/sliderbanner1.jpg" class="banner_intro">
				</div>
				<div class="swiper-slide">
				<img src="assets/images/sliderbanner2.jpeg" class="banner_intro">
				</div>
				<div class="swiper-slide">
				<img src="assets/images/sliderbanner3.jpg" class="banner_intro">
				</div>


  			</div>
 		 <!-- If we need pagination -->
  		<div class="swiper-pagination"></div>

  			<!-- If we need navigation buttons -->
 		<div class="swiper-button-prev"></div>
  		<div class="swiper-button-next"></div>
		  </div>
		  </div>
		  </div>






















		  <div class="container">
			<p class="home_text_counter">لیست محصولات
			</p>
			<div class="grid-container">

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
		  </div>
		  </div>
		  </div>



		  <footer>
		  <div class="container">
			<p>
			<a href="home_view.php" class="link-1">صفحه اصلی</a>
			<br>
			<a href="">درباره ما</a>
			<br>
			<a href="">قوانين</a>
			<br>
			<a href="../contact/contact.html">تماس با ما</a>
			</p>

			<p class="footer-company-name">Dire Shop © 2022</p>
			</div>


		  </footer>


		<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
		<script src="assets/Main.js"></script>
	</body>
</html>
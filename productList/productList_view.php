<!doctype html>
<html lang = "fa">
	<head>
		<title>کاتالوگ</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<style>
		</style>
	</head>
	<body class = "container">
        <h1>کاتالوگ محصولات</h1>
		<div>
		<?php
			foreach( $productList as $product ){
				echo "
				<div class = 'card'>
				<img src = '{$product['imagesrc']}'class='card-img'><br>
					<div class = 'card-filled'>
						<h2> <a href = 'productDetails_controller.php?id={$product['id']}'> {$product['title']} </a></h2>
						<p>مدت : {$product['duration']}</p>
						<p>{$product['discription']}</p>	
						<p>قیمت: {$product['price']}</p>			
					</div>
				</div>			
				";
			}
		?>
		</div>
	</body>
</html>
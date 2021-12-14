<!doctype html>
<html lang = "fa">
	<head>
		<title>inbox</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<style>
		</style>
	</head>
	<body class = "container">
        <h1>پیام های دریافتی</h1>
		<div class= "">
			<table class = "datatable">
			<tr>
			<th>
				<input type='checkbox'>
			</th>
			<th>	
				شناسه پیام
			</th>
			<th>	
				نام فرستنده
			</th>
			<th>	
				ایمیل فرستنده 
			</th>
			<th>	
				عنوان 
			</th>
			<th>	
				متن پیام
			</th>
			</tr>
			<?php
			foreach( $productList as $product ){
				include 'templates/messageListTable.php';
			}
			?>
			</table>








		</div>
	</body>
</html>
<?php
include 'setting.php';
include 'db.php';

	$uid = $_GET['id'];
	$db = new db($dbhost, $dbuser, $dbpass, $dbname);

	$productlist = $db->query("SELECT * FROM product WHERE id = $uid ")->fetchArray();
	
?>

<!doctype html>
<html lang= "fa">
	<head>
		<title>ویرایش اطلاعات محصول</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
		
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
	
		<h1>ویرایش اطلاعات محصول</h1>
		<form action = "editProduct.php?id=<?php echo $uid;?>" method = "post">
			<input type = "text"  placeholder = "کد محصول" value = <?php echo $uid;?> >
		<br>
		<input type = "text" id="title" name = "title" placeholder = "عنوان محصول" value = <?php echo $productlist['title'];?> >
		
		<input list = "durations" type = "search" name = "duration" placeholder="مدت زمان " value = <?php echo $productlist['duration'];?>>
			<datalist id = "durations">
				<option value = "1 month">1 ماهه</option>
				<option value = "3 month">3 ماهه</option>
				<option value = "6 month">6 ماهه</option>
				<option value = "12 month">1 ساله</option>
				<option value = "18 month">18 ماهه</option>
				<option value = "24 month">2 ساله </option>
				<option value = "forever">مادام العمر</option>
			</datalist>
		<br>	
		<textarea id = "discription" name = "discription" placeholder = "توضیحات" > <?php echo $productlist['discription'];?> </textarea>
		<br>
		<input type = "text" id="price" name = "price" placeholder = "قیمت " value = <?php echo $productlist['price'];?>>
		<label >تومان </label>
		<button type = "submit" class = "btn btn-filled">
				<span>
				ثبت تغییرات
				</span>
				
			</button>
				
			</a>
		</form>
		
		 
	</body>

 
</html>
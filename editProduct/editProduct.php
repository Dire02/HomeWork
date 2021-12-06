<?php
include 'setting.php';
include 'db.php';

$uid = $_GET['id'];
//conect to db
		$dbc = new db($dbhost, $dbuser, $dbpass, $dbname);	
//insert query
if( isset($_POST['submit']) ){ 
	$title =		 $_POST['title'];
	$duration = 	 $_POST['duration'];
	$discription =	 $_POST['discription'];
	$price = 		 $_POST['price'];

		$sql = "UPDATE product
		SET title = ?,
		duration = ?,
		discription = ?,
		price = ? 
		WHERE  id = ? ";	
		$result = $dbc -> query($sql, $title, $duration, $discription, $price, $uid);

		echo 'با موفقیت ویرایش شد';
}

else{
	// 2. create query
	$sql =	"SELECT * FROM product
		WHERE id = ?";
	// 3. execute query
	$result = $dbc -> query( $sql, $uid ); // mysqli_query
	$product = $result -> fetchArray();

	$title =		 $product['title'];
	$duration = 	 $product['duration'];
	$discription =	 $product['discription'];
	$price = 		 $product['price'];


	
	// show form view
	include 'editProduct_view.php';
}




//close it
		$dbc-> close();
//just in case 	
		echo'ارسال شد ';



?>
<?php
include 'setting.php';
include 'db.php';

$uid = $_GET['id'];
//conect to db
		$dbc = new db($dbhost, $dbuser, $dbpass, $dbname);	
//insert query
		$sql = "UPDATE product
		SET title = ?,
		duration = ?,
		discription = ?,
		price = ? 
		WHERE  id = {$uid} ";


//execute		
		$result = $dbc -> query($sql,$_POST['title'],$_POST['duration'],$_POST['discription'],$_POST['price']);
//close it
		$dbc-> close();
//just in case 	
		echo'ارسال شد ';



?>
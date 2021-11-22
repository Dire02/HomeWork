<?php
include 'setting.php';
include 'db.php';

$uid = $_GET['id'];
//conect to db
		$dbc = new db($dbhost, $dbuser, $dbpass, $dbname);	
//insert query
		$sql = "UPDATE users
		SET name = ?,
		pass = ?,
		email = ?
		WHERE  id = {$uid} ";


//execute		
		$result = $dbc -> query($sql, $_POST['name'], $_POST['pass'], $_POST['email']);
//close it
		$dbc-> close();
//just in case 	
		echo'ارسال شد ';



?>
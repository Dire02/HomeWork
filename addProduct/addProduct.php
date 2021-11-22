<?php
include 'setting.php';
include 'db.php';


//conect to db
	$dbc = new db($dbhost, $dbuser, $dbpass, $dbname);
//insert query
		$sql = "INSERT INTO product (title,duration,discription,price)
				VALUES(?,?,?,?)";
//execute		
		$result = $dbc -> query($sql,$_POST['title'],$_POST['duration'],$_POST['discription'],$_POST['price']);
//close it
		$dbc-> close();
//just in case 	
		echo'ارسال شد ';

?>
<?php
include 'setting.php';
include 'db.php';


//conect to db
		$dbc = new db($dbhost, $dbuser, $dbpass, $dbname);	
//insert query
		$sql = "INSERT INTO users (name,pass,email)
				VALUES(?,?,?)";


//execute		
		$result = $dbc -> query($sql, $_POST['name'], $_POST['pass'], $_POST['email']);
//close it
		$dbc-> close();
//just in case 	
		echo'ارسال شد ';



?>
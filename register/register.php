<?php
//var_dump( $_POST );

//conect to db
		$dbc = new mysqli ( 'localhost', 'root', '', 'Users' );
//insert query
		$sql = "INSERT INTO users (name,pass,email)
				VALUES('{$_POST['name']}', '{$_POST['pass']}','{$_POST['email']}')";
//execute		
		$result = $dbc -> query($sql);
//close it
		$dbc-> close();
//just in case 	
		echo'ارسال شد ';



?>
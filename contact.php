<?php
// var_dump( $_POST );

//conect to db
		$dbc = new mysqli ( 'localhost', 'root', '', 'front' );
//insert query
		$sql = "INSERT INTO messages (name,email,title,text)
				VALUES('{$_POST['name']}', '{$_POST['email']}', '{$_POST['title']}', '{$_POST['text']}')";
//execute		
		$result = $dbc -> query($sql);
//close it
		$dbc-> close();
//just in case 	
		echo'ارسال شد ';



?>
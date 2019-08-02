<?php
try{
	$conn=new \PDO('mysql:host=db;dbname=db_lamp;charset=utf8','lamp_user','lamp_pass');
	echo 'Sucessfully connected to MySQL (PDO)';
}catch(PDOException $e){
	echo 'Connection Failed' . $e;
}
?>
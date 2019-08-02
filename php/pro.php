<?php
$host = 'db'; // service name from docker-compose.yml
$user = 'lamp_user';
$password = 'lamp_pass';
$db = 'db_lamp';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
	echo 'Connection Failed' . $conn->connect_error;
}
echo 'Sucessfully connected to MySQL(MySQLi)';
?>
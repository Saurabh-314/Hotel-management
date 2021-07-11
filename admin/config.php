<?php
$server= 'localhost';
$username= 'root';
$password= '';
$con= mysqli_connect($server, $username, $password);
if(! $con){
	die('could not connect:'.mysqli_error());
}
$db= mysqli_select_db($con, 'hotel');
if(! $db){
	die('could not connect:'.mysqli_error());
}
?>
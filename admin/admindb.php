<?php
$db=mysqli_connect('localhost', 'root', '') or die('Unable to connect.');
$query='CREATE DATABASE IF NOT EXISTS hotel';
mysqli_query($db, $query) or die(mysqli_error($db));
mysqli_select_db($db, 'hotel') or die(mysqli_error($db));

$query= 'CREATE TABLE adminlogin(
    
    id     				integer(3)     NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    admin_username    	varchar(20)     NOT NULL, 
	admin_password      varchar(20)     NOT NULL	
)
ENGINE=innoDB';
mysqli_query($db, $query) or die (mysqli_error($db));
echo 'table created & ';
$sql = "INSERT INTO adminlogin(admin_username, admin_password) VALUES ('admin','admin')";
mysqli_query($db, $sql) or die (mysqli_error($db));
echo 'Data insert successfully !!';
?>
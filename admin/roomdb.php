<?php
$Delux=15;
$Luxury=10;
$Guest=20;
$Single=30;
$db=mysqli_connect('localhost', 'root', '') or die('Unable to connect.');
$query='CREATE DATABASE IF NOT EXISTS hotel';
mysqli_query($db, $query) or die(mysqli_error($db));
mysqli_select_db($db, 'hotel') or die(mysqli_error($db));

$query= 'CREATE TABLE roomdb(
    
    Delux     INTEGER(3)     NOT NULL,
    Luxury    INTEGER(3)     NOT NULL, 
	Guest     INTEGER(3)     NOT NULL,
	Single    INTEGER(3)	 NOT NULL	
)
ENGINE=innoDB';
mysqli_query($db, $query) or die (mysqli_error($db));
echo 'table created & ';
$sql = "INSERT INTO roomdb(Delux, Luxury, Guest, Single) VALUES ('$Delux','$Luxury','$Guest','$Single')";
mysqli_query($db, $sql) or die (mysqli_error($db));
echo 'Data insert successfully !!';
?>
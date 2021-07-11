<?php
$db=mysqli_connect('localhost', 'root', '') or die('Unable to connect.');
$query='CREATE DATABASE IF NOT EXISTS hotel';
mysqli_query($db, $query) or die(mysqli_error($db));
mysqli_select_db($db, 'hotel') or die(mysqli_error($db));

// echo 'database created successfully';

$query= 'CREATE TABLE reservation(
	id       INTEGER(5)  NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    title     	VARCHAR(7)  							NOT NULL,  
	fname      	VARCHAR(20)                             NOT NULL,
	lname      	VARCHAR(20)                             NOT NULL,
    email   	VARCHAR(50)              			    NOT NULL,
    phone		BIGINT(13)                             	NOT NULL,
    aadhar		BIGINT(12)                            	NOT NULL,
    troom		VARCHAR(15)								NOT NULL,
	tbed		VARCHAR(15)								NOT NULL,
	nroom		VARCHAR(15)								NOT NULL,
	meal		VARCHAR(15)								NOT NULL,
	cin 		DATE									NOT NULL,	
    cout 		DATE									NOT NULL
)
ENGINE=innoDB';
mysqli_query($db, $query) or die (mysqli_error($db));
echo 'table created successfully';
?>
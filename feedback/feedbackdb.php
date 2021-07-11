<?php
$db=mysqli_connect('localhost', 'root', '') or die('Unable to connect.');
$query='CREATE DATABASE IF NOT EXISTS hotel';
mysqli_query($db, $query) or die(mysqli_error($db));
mysqli_select_db($db, 'hotel') or die(mysqli_error($db));

// echo 'database created successfully';

$query= 'CREATE TABLE feedback(
    id       INTEGER(5)  NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    name     VARCHAR(30)             NOT NULL,
    email    VARCHAR(50)             NOT NULL, 
	phone    BIGINT(13)             NOT NULL,
	subject  VARCHAR(50)			 NOT NULL,
	message  VARCHAR(500)			 NOT NULL
)
ENGINE=innoDB';
mysqli_query($db, $query) or die (mysqli_error($db));
echo 'table created successfully';
?>
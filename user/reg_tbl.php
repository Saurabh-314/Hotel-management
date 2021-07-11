<?php
$db=mysqli_connect('localhost', 'root', '') or die('Unable to connect.');
$query='CREATE DATABASE IF NOT EXISTS hotel';
mysqli_query($db, $query) or die(mysqli_error($db));
mysqli_select_db($db, 'hotel') or die(mysqli_error($db));

echo 'database created successfully';

$query= 'CREATE TABLE user(
    user_id  INTEGER(5)  NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    Name     VARCHAR(30)                             NOT NULL,
    Email_Id   VARCHAR(50)              NOT NULL       UNIQUE,
    Mobile_Number BIGINT(13)                             NOT NULL,
    Gender VARCHAR(10)                            NOT NULL,
    City   VARCHAR(30)                             NOT NULL,
    State      VARCHAR(30)                             NOT NULL,
    psw VARCHAR(20)         NOT NULL
    
)
ENGINE=innoDB';
mysqli_query($db, $query) or die (mysqli_error($db));
echo 'table created successfully';
?>
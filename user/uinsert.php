<?php
$Name = $_POST['Name'];
$Email_Id = $_POST['Email_Id'];
$Mobile_Number = $_POST['Mobile_Number'];
$Gender = $_POST['Gender'];
$City = $_POST['City'];
$State = $_POST['State'];
$psw = $_POST['psw'];

$db=mysqli_connect('localhost', 'root', '') or die (mysqli_error ($db));

mysqli_select_db($db, 'hotel') or die (mysqli_error($db));
$query= "INSERT INTO user
(Name, Email_Id, Mobile_Number, Gender, City, State, psw)
VALUES('$Name', '$Email_Id', '$Mobile_Number', '$Gender', '$City', '$State', '$psw')";
mysqli_query($db, $query) or die (mysqli_error($db));
header('location: ../room reservation/reservation.html');
 ?>

<?php
session_start();
$title= $_POST['title'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$aadhar= $_POST['aadhar'];
$troom= $_POST['troom'];
$tbed = $_POST['tbed'];
$nroom= $_POST['nroom'];
$meal= $_POST['meal'];
$cin= $_POST['cin'];
$cout= $_POST['cout'];

$db=mysqli_connect('localhost', 'root', '') or die (mysqli_error ($db));

mysqli_select_db($db, 'hotel') or die (mysqli_error($db));
$query= "INSERT INTO reservation (title, fname, lname, email, phone, aadhar, troom, tbed, nroom, meal, cin, cout)
 VALUES ('$title','$fname','$lname','$email','$phone','$aadhar','$troom','$tbed','$nroom','$meal','$cin','$cout')";
mysqli_query($db, $query) or die (mysqli_error($db));
$_SESSION['troom'] = $troom;
$_SESSION['tbed'] = $tbed;
//header('location: ../admin/payment.php');
//echo  "data insert successfully";
echo "<script type='text/javascript'> alert('Room Booked. !!!!')</script>";
echo "<script>window.open('../index.html','_self')</script>";
?>

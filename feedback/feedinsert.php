<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$db=mysqli_connect('localhost', 'root', '') or die (mysqli_error ($db));

mysqli_select_db($db, 'hotel') or die (mysqli_error($db));
$query= "INSERT INTO feedback (name, email, phone,subject,message) VALUES('$name','$email','$phone','$subject','$message')";
mysqli_query($db, $query) or die (mysqli_error($db));

echo "<script type='text/javascript'> alert('Thanks for giving FeedBack !!!!')</script>";
echo "<script>window.open('../index.html','_self')</script>";
?>

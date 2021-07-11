<?php
include_once('config.php');
session_start();
if(isset($_POST['submit'])){
	$admin_username = $_POST['admin_username'];
	$admin_password = $_POST['admin_password'];
	// echo $admin_username;	  
	$sql = "SELECT * FROM adminlogin where admin_username= '$admin_username' and  admin_password = '$admin_password'";
			
	$query = mysqli_query($con, $sql);
	$row= mysqli_num_rows($query);
		if($row == 1){
			echo "Login Successful";
			$_SESSION['admin_username']= $admin_username;
			header('location:adminpage.php');
		}else{
			
    $_SESSION['admin_username'] = $admin_username;
	echo "<script>alert('Login Failed')</script>";
	echo "<script>window.open('adminlogin.html','_self')</script>";	
	
}
}
?>
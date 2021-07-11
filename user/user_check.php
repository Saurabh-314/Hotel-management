<?php
include_once('config.php');
session_start();
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$psw = $_POST['psw'];	  
	$sql = "SELECT * FROM user where Email_Id= '$email' and  psw = '$psw'";
			
			
	$query = mysqli_query($con, $sql);
	$row= mysqli_num_rows($query);
		if($row == 1){
			echo "Login Successful";
			$_SESSION['Email_Id']= $email;
			header('location:../room reservation/reservation.html');
		}else{
			echo "login failed"; 
    $_SESSION['Email_Id'] = $email;	

}
}
?>
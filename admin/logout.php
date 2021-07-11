<?php
session_start();
unset($_SESSION['admin_username']);
echo $admin_username;
session_destroy();
echo "<script>alert(' Logout Successfully')</script>";
echo "<script>window.open('../index.html','_self')</script>";
//header('Location: ../index.html');
exit;

?>
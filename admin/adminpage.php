<?php
// Create connection
$conn = new mysqli('localhost','root','','hotel');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = " SELECT * FROM adminlogin";
$result = $conn->query($sql);

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.navbar .align{
 float:right;
 
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: green;
  hover:0.3s;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
body, html {
  height: 100%;
  margin: 0;
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body background ="../images/adminpage.jpg">
<div class="bg">
<div class="navbar">
  
  <a href="roomstatus.php">Room Status</a>
  <a href="mngfeedback.php">Manage Feedback</a>
  <a href="userdetails.php">User Details</a>
  <div class="align">
		<a href="logout.php">Logout</a>
<?php



 



if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		
		echo "<td>".$row['admin_username'].     "</td>"; 
	}
	
}

$conn->close();
?>
  </div>
</div>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
	
	padding: 10px;
	text-align: left;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

</style>
</head>
<body background="daria-shevtsova-426318-unsplash.jpg">
<br><button class="btn" onclick="window.location.href='adminpage.php'"><i class="fa fa-home"></i> Home</button><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = " SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
	echo "<tr>";
	echo "<th>Id </th>"; 
	echo "<th>   Name </th>";
	echo "<th>   Email </th>";
	echo "<th>   Phone </th>";
	echo "<th>   Subject</th>";
	echo "<th>   Message</th>";
	echo "</tr>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row['id'].     "</td>&nbsp"; 
		echo "<td>".$row['name'].   "</td>";
		echo "<td>".$row['email'].  "</td>";
		echo "<td>".$row['phone'].  "</td>";
		echo "<td>".$row['subject']."</td>";
		echo "<td>".$row['message']."</td>";
    }
	echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>
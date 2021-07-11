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
th {
	color:yellow;
	background:darkcyan;
	padding: 20px;
	text-align: left;
}
td {
	background:#E0FFFF;
	padding: 20px;
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

$sql = " SELECT * FROM roomdb";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
	echo "<tr>";
	echo "<th> Delux Room Available</th>"; 
	echo "<th> Luxury Room Available </th>";
	echo "<th> Guest Room Available</th>";
	echo "<th> Single Room Available</th>";
	
	echo "</tr>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>". $row['Delux']."/15</td> &nbsp"; 
		echo "<td>". $row['Luxury']."/10</td>";
		echo "<td>". $row['Guest']."/20</td>";
		echo "<td>". $row['Single']."/30</td>";
		echo "</tr>";
  // echo "<style = "font-color: white"><br> </style>";
    }
	echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>
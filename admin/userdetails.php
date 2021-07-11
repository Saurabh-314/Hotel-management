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
	
	padding: 10px;
	text-align: left;
}
td {
	
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

$sql = " SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
	echo "<tr>";
	echo "<th> User Id </th>"; 
	echo "<th> Name </th>";
	echo "<th> Email_Id </th>";
	echo "<th> Mobile_Number </th>";
	echo "<th> Gender </th>";
	echo "<th> City </th>";
	echo "<th> State </th>";
	echo "<th> Password </th>";
	echo "<th> Delete </th>";
	echo "</tr>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td> ". $row['user_id']."</td> &nbsp"; 
		echo "<td> ". $row['Name']."</td>";
		echo "<td> ". $row['Email_Id']."</td>";
		echo "<td> ". $row['Mobile_Number']."</td>";
		echo "<td> ". $row['Gender']."</td>";
		echo "<td> ". $row['City']."</td>";
		echo "<td> ". $row['State']."</td>";
		echo "<td> ". $row['psw']."</td>";
		<td><a href="update.php?id=<?php echo $res['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete"> 
		<i class="fa fa-trash"aria-hidden="true"></a></td>

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
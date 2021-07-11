<html>
<head>
<style> 
<title> Invoice </title>
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
</style>
</head>
<body>
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

$sql = " SELECT * FROM reservation where email= 'maxxxjob314@gmail.com' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
	echo "<tr>"; 
	echo "<th> Name 		  </th>";
	echo "<th> Email_Id 	  </th>";
	echo "<th> Phone	      </th>";
	echo "<th> Type Of Room   </th>";
	echo "<th> Type Of Bed 	  </th>";
	echo "<th> Number Of Room </th>";
	echo "<th> Meal 		  </th>";
	echo "<th> Check In 	  </th>";
	echo "<th> Check Out 	  </th>";
	
	echo "</tr>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>"; 
		echo "<td> ". $row['title']." ".$row['fname']." ".$row['lname']."</td>";
		echo "<td> ". $row['email']."</td>";
		echo "<td> ". $row['phone']."</td>";
		echo "<td> ". $row['troom']."</td>";
		echo "<td> ". $row['tbed']. "</td>";
		echo "<td> ". $row['nroom']."</td>";
		echo "<td> ". $row['meal']. " </td>";
		echo "<td> ". $row['cin'].  "</td>";
		echo "<td> ". $row['cout']. "</td>";
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

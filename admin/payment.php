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

// $id = $row['id'];
$sql = " SELECT * FROM reservation ";

$pid = $_GET['id'];
$result = $conn->query($sql);
// $id = $row['id'];
 if($pid % 2 ==1 )
 {
if ($result->num_rows > 0) {
    echo "<table>";
	echo "<tr>"; 
	echo "<th> Name 		  </th>";
	echo "<th> Room Type 	  </th>";
	echo "<th> Bed Type	  	  </th>";
	echo "<th> Number Of Room </th>";
	echo "<th> Meal Type	  </th>";
	echo "<th> Check In 	  </th>";
	echo "<th> Check Out 	  </th>";
	echo "<th> Room Rent 	  </th>";
	echo "<th> Bed Rent 	  </th>";
	echo "<th> Meal		 	  </th>";
	echo "<th> Gr. Total 	  </th>";
	echo "</tr>";
    while($row = $result->fetch_assoc()) {
		echo "<tr>"; 
		echo "<td> ". $row['title']." ".$row['fname']." ".$row['lname']."</td>";
		echo "<td> ". $row['troom']."</td>";
		echo "<td> ". $row['tbed']. "</td>";
		echo "<td> ". $row['nroom']."</td>";
		echo "<td> ". $row['meal']. " </td>";
		echo "<td> ". $row['cin'].  "</td>";
		echo "<td> ". $row['cout']. "</td>";
		echo "<td> ". $row['rmrent']."</td>";
		echo "<td> ". $row['Bdrent']."</td>";
		echo "<td> ". $row['meal']. "</td>";
		echo "<td>". $row['grttl']."</td>";
		echo "</tr>"; 
  
    }

	echo "</table>";
} else {
    echo "0 results";
}
}
$conn->close();
?>

</body>
</html>

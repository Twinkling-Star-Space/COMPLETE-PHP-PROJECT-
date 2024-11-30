<?php 

include 'connectserver.php';

if ($conn->connect_error) 
{ 
	die("Connection failed: " . $conn->connect_error); 
} 


mysqli_select_db($conn, "NOV2202");
 
$query = "SELECT * FROM `MIN1`"; 

// FETCHING DATA FROM DATABASE 
$result = $conn->query($query); 

	if ($result->num_rows > 0) 
	{ 

		while($row = $result->fetch_assoc()) 
		{ 
			echo "ID" .$row["Diplalid"] .
				"| Name: " . $row["Diplalname"].  
                " | Address: " .$row["Diplaladdress"].  
                " | Email: " . $row["Diplalemail"].
				 "|Gender:". $row["Diplalgender"]. "<br>"; 
		} 
	} 
	else { 
		echo "0 results"; 
	} 

$conn->close(); 

?>

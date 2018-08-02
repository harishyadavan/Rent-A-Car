<?php
//attempt database connection
$mysqli=new mysqli("localhost","root","","rent");
	if($mysqli === false) 
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}
	?>
	<?php
// attempt query execution 
// iterate over result set 
// print each record and its fields 
// output: "1:Aerosmith \n 2:Abba \n ..." 
$sql = "SELECT name,carid,email,address,phone FROM cbooking"; 
if ($result = $mysqli->query($sql)) {   if ($result->num_rows > 0) {     while($row = $result->fetch_array()) { 

       
echo "<table style='width:100%' border='1'>";
 echo "<tr>";
    echo "<th>Name</th>";
  echo "<th>CAR-ID</th>"; 
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Phone</th>";
 echo "</tr>";
  echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['carid']."</td>";
    echo "<td>".$row['email']."</td>";
	echo "<td>".$row['address']."</td>";
	echo "<td>".$row['phone']."</td>";
 echo "</tr>";
 echo "</table>"."\n";

    } 
    $result->close(); 
  } else { 
    echo "No records matching your query were found."; 
  } 
} else { 
  echo "ERROR: Could not execute $sql. " . $mysqli->error; 
} 
 
// close connection 
$mysqli->close(); 
?>

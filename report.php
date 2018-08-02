<?php
session_start();
if(isset($_SESSION['username']))
{
?>
<?php
//attempt database connection
$mysqli=new mysqli("localhost","root","","rent");
	if($mysqli === false) 
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}
	?>
<html>
<head>
<title>
	ONLINE CAR RENTAL MANAGEMENT SYSTEM
</title>

<style>

table{ border:4px solid; align:center; cellpadding:6; cellspacing:6; width:500pt;}

td{ border:1px solid; align:center;}

th{ border:2px solid; align:center;}

</style>

</head>

<body onload="window.print()">

<center>

<p>

<h3> RENT-A-CAR </h3>

Mission, Vission & Values <br/>

Ground floor M S Ramaiah institution of Technology,Mathikere,Bangalore-56 <br/> <br/>

<br/>

No. 9620199050,9739303607<br/> 

<hr/>
<br/>
</center>

<hr/>

<br/> <br/> 

<table style="width:800px; background:white;" border="1" >
<tr><th>Name</th><th>CAR-ID</th><th>Email</th><th>Address</th><th>Phone</th></tr>   
	<?php
// attempt query execution 
// iterate over result set 
// print each record and its fields 
// output: "1:Aerosmith \n 2:Abba \n ..." 
$cname=$_SESSION['username'];
$sql = "SELECT * FROM cbooking WHERE name='$cname'";

if ($result = $mysqli->query($sql)) 
{   
if ($result->num_rows > 0)
{     
 while($row = $result->fetch_array()) 
 { 
?>
    
<?php
  echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['carid']."</td>";
    echo "<td>".$row['email']."</td>";
	echo "<td>".$row['address']."</td>";
	echo "<td>".$row['phone']."</td>";
 echo "</tr>";
   } 
    $result->close(); 
  } 
  else 
  { 
    echo "Sorry NO Bookings."; 
  } 
} 
else { 
  echo "ERROR: Could not execute $sql. " . $mysqli->error; 
} 
 
// close connection 
$mysqli->close(); 
?>
</table>


Date : <?php echo date("d-m-Y"); 
?>

<h1><font size="2">Terms and Conditions</font></h1>
<p>* Keep the Recipt available with you when you are collecting the Vehicle</p>
<p>* Pay the security Advance amount of Rs 5000/- </p>
<p>* Debit / Credit Cards are Accecpted</p>
<p>* Pay the security advance within 24 Hrs After Booking</p>
<p>* Rent is calculated Based on the time you collect the vehicle within 24 Hrs</p>
</body>
</html>
<?php
}
else
	header("location:login.php")
?>

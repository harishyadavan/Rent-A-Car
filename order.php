<?php
session_start();
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    } 
    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	
	body { 
    background-image: url('c3.jpg');
    background-position:center;
	 background-attachment: fixed;
	 background-repeat: no-repeat;
}
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Rent-A-Car</h1>
    <p>Mission, Vission & Values</p>
  </div>
</div>

<nav class="navbar navbar-inverse">

      <a class="navbar-brand" href="#">Rent-A-Car</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
     <li><a href="order.php">Your Orders</a></li>
		<li><a href="cancel.php">Cancel Order</a></li>
		<li><a href="about.php">About</a></li>
        <li><a href="Contact.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signout.php"><span class="datalist"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>				
</body>
</html>
<?php
//attempt database connection
$mysqli=new mysqli("localhost","root","","rent");
	if($mysqli === false) 
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}
	?>
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

<?php
}
else
	header("location:login.php")
?>

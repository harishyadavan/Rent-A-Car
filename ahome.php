<?php
session_start();
if(isset($_SESSION['name']))
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
        <li class="active"><a href="ahome.php">Home</a></li>
        <li ><a href="add.php">Add Car</a></li>
     <li><a href="orderadmin.php">Orders</a></li>
		<li><a href="canceladmin.php">Cancel Order</a></li>
        <li><a href="acontact.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="asignout.php"><span class="datalist"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>				
 
  </form>
</footer>
</body>
</html>
	<?php
// attempt query execution 
// iterate over result set 
// print each record and its fields 
// output: "1:Aerosmith \n 2:Abba \n ..." 
$sql = "SELECT carid,carname,price,img FROM addcar"; 
if ($result = $mysqli->query($sql)) {   if ($result->num_rows > 0) {     while($row = $result->fetch_array()) { 
    echo "<div class='container'>";
 echo "<div class='row'>";
	 echo "<div class='col-m-4'>";
      echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'>".$row['carname']."</div>";
		
        echo "<div class='panel-body'><img src=".$row['img']." class='img-responsive' style='width:50%' style='height:50%' alt='Image'></div>";
        echo "<div class='panel-footer'>Rent-A-Car only at Rs-".$row['price']."/- per day</div>";
		echo "<div class='panel-footer'>CAR-ID:".$row['carid']."</div>";
		
		echo "<a href='remove.php'><input type='submit' style='font-weight:bold' class='button' value='REMOVE'></a>&nbsp;";
      echo "</div>";
	  echo "</div>";
	  echo "</div>";
	  echo "</div>";
      echo "</div>"."\n";
    } 
    $result->close(); 
  } else { 
    echo "Please Add the Cars."; 
  } 
} else { 
  echo "ERROR: Could not execute $sql. " . $mysqli->error; 
} 
 
// close connection 
$mysqli->close(); 
?>

<?php
}
else
	header("location:alogin.php")
?>

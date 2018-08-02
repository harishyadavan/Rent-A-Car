
<?php
session_start();
if(isset($_SESSION['name']))
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
    background-image: url('c4.jpg');
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
       <li><a href="asingout.php"><span class="datalist"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>
		
   <center> <form method="POST" enctype="multipart/form-data">
      
	  
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Price" required name="price"></p>
    
	  <select placeholder="Car Name" required name="carname">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="Audi">Audi</option>
  <option value="Benz">Benz</option>
  <option value="i20">i20</option>
  <option value="Verna">verna</option>
  <option value="Swift">Swift</option>
  <option value="Innova">Innova</option>
  <option value="Etios">Etios</option>
  <option value="Liva">Liva</option>
  <option value="Kwid">Kwid</option>
  <option value="Fortuner">Fortuner</option>
  <option value="Honda City">Honda City</option>
</select>
      <input class="w3-input w3-padding-16" type="file" required name="image"></p>
	  
      <p>
        <input class="w3-btn w3-light-grey w3-padding-large" type="submit" name="SUB" value="Add Car">
          <i class="fa fa-paper-plane"></i> 
        </button></p><p><button class="w3-btn w3-light-grey w3-padding-large" type="cancel" onclick="window.location.href='ahome.php'">
          <i class="fa fa-paper-plane"></i> Cancel
        </button>
      </p></center>
    </form>
	
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
	<?php
	Global $filenm;
	if(isset($_FILES['image'])){
		$errors= array();
		$filepath=pathinfo($_FILES["image"]["name"]);
		$extn=$filepath['extension'];

	$randfn=uniqid();

	$movepic=move_uploaded_file($_FILES["image"]["tmp_name"],"images/". $randfn .".".$extn);
	if($movepic)
	{
		$filenm="images/". $randfn .".". $extn;
	}
	}
if(isset($_POST["SUB"]))
	{
		
		$pric=$_POST["price"];
		$carnam=$_POST["carname"];
		
		$sql="INSERT INTO addcar (price,carname,img) VALUES ('$pric','$carnam','$filenm')";
		if ($mysqli->query($sql)===true) 
		{
			echo "<script>alert('Successfully Added')</script>";
		}
		else
		{
			echo "<div style ='font:40px/21px Arial,tahoma,sans-serif;color:red'>Sorry Somthing went Wrong</div>";
		}
		//close connection
		$mysqli->close();
	}
?>


<?php
}
else
	header("location:alogin.php")
?>

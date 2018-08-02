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
  
        <li><a href="acontact.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="main.php"><span class="datalist"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>
		
   <center> <form method="POST" action="">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Username" required name="Name"></p>
	  <p><input class="w3-input w3-padding-16" type="phone" placeholder="Phone" required name="Phone"></p>
      <p><input class="w3-input w3-padding-16" type="email" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Address" required name="Address"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Car-ID" required name="Car-ID"></p>
      <p>
        <button class="w3-btn w3-light-grey w3-padding-large" type="submit" name="SUB">
          <i class="fa fa-paper-plane"></i> BOOK NOW
        </button></p><p><button class="w3-btn w3-light-grey w3-padding-large" type="submit" onclick="window.location.href='ahome.php'">
          <i class="fa fa-paper-plane"></i> Cancel
        </button>
      </p></center>
    </form>
  
<?php
if(isset($_POST["SUB"]))
	{
		
		$name=$_POST["Name"];
		$phone=$_POST["Phone"];
		$email=$_POST["Email"];
		$address=$_POST["Address"];
		$carid=$_POST["Car-ID"];
		$sql="INSERT INTO cbooking (name,phone,email,address,carid) VALUES ('$name','$phone','$email','$address','$carid')";
		if ($mysqli->query($sql)===true) 
		{
			echo "<div style ='font:40px/21px Arial,tahoma,sans-serif;color:red'>Successfully Booked</div>";
		}
		else
		{
			echo "<div style ='font:40px/21px Arial,tahoma,sans-serif;color:red'>Something went wrong</div>";
		}
		//close connection
		$mysqli->close();
	}
?>

</body>
</html>


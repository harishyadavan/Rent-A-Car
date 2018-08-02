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
    background-image: url('car9.jpg');
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
<center>
<h1 style="color:white;"><font size="12">Booking Successfull</font></h1>			
    <button style='font-weight:bold' type="submit" onclick="window.location.href='report.php'">
          <i class="fa fa-paper-plane"></i> Print Recipt
        </center>

  </form>
</footer>

</body>
</html>
<?php
}
else
	header("location:login.php")
?>

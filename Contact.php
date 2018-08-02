<?php
session_start();
if(isset($_SESSION['username']))
{
?>

<html>
<head>
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
</nav>  </form>
</footer>

</body>
<hr color="#800000" width="90%">
    <table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="613" valign="top"> 
      <div align="center">
        <table width="605" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td valign="middle"><div align="justify"> 
                <p align="center"><font color="white" size="2" face="Verdana, Arial, Helvetica, sans-serif"><font size="6">
                  Rent A Car is located at Ground floor M S Ramaiah institution of Technology,Mathikere,Bangalore-56</font></p>
                <p align="center"><font color="white" size="2" face="Verdana, Arial, Helvetica, sans-serif">Tel 
                  Nos. 681-5307 / 942-7325 / 645-5209</font></p>
                <p align="center"><font color="white" size="2" face="Verdana, Arial, Helvetica, sans-serif">Cel 
                  No. 0917-5300277,9739303607</font></p>
                </div></td>
          </tr>
        </table>


<hr color="#800000" width="80%">


</body>
</html>

<?php
}
else
	header("location:login.php")
?>

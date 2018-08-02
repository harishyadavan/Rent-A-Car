<?php
session_start();
if(isset($_SESSION['username']))
{
	header("Location:home.php");
}
?>
<?php
//attempt database connection
$mysqli=new mysqli("localhost","root","","rent");
if($mysqli === false)
{
die("ERROR: Could not connect.".mysqli_connect_error());
}
?>
<html lang="en">
<head> <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<style>
/*
/* Created by Filipe Pina
* Specific styles of signin, register, component
*/
/*
* General styles
*/
/* Set a style for all buttons */
button {
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 20%;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
span.psw {
display: block;
float: none;
}
.cancelbtn {
width: 100%;
}
}
body, html{
height: 100%;
background-repeat: no-repeat;
background-color: #d3d3d3;
background-image:url('car6.jpg');
font-family: 'Oxygen', sans-serif;
}

.main{
margin-top: 70px;
}

h1.title {
font-size: 50px;
font-family: 'Passion One', cursive;
font-weight: 400;
}

hr{
width: 10%;
color: #fff;
}

.form-group{
margin-bottom: 15px;
}

label{
margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
font-size: 11px;
padding-top: 3px;
}

.main-login{
background-color: #fff;
/* shadows and rounded borders */
-moz-border-radius: 2px;
-webkit-border-radius: 2px;
border-radius: 2px;
-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
margin-top: 30px;
margin: 0 auto;
max-width: 330px;
padding: 40px 40px;

}

.login-button{
margin-top: 5px;
}

.login-register{
font-size: 11px;
text-align: center;
}

</style>
<title>customer</title>

</head>
<body>
<div class="container">
<div class="row main">
<div class="panel-heading">
<div class="panel-title text-center">
<h1 class="title">Welcome To Login Page</h1>
<hr />
</div>
</div>
<div class="main-login main-center">
<form class="form-horizontal" method="POST" action="">

<div class="form-group">
<label for="name" class="cols-sm-2 control-label">User Name</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="name" required placeholder="Enter your User Name"/>
</div>
</div>
</div>
<div class="form-group">
<label for="email" class="cols-sm-2 control-label">Password</label>
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
<input type="password" class="form-control" name="pass" required  placeholder="Enter your Password"/>
</div>
</div>
</div>
<input type="checkbox" checked="checked"> Remember me<br/>

<div class="form-group ">
<input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="SUB" value="Login" style="font-weight:bold"></div>
<div class="login-register">
<a href="main.php">Cancel</a>
</div>
<div class="form-group ">
<button type="button" class="btn btn-primary btn-lg btn-block login-button" onclick="window.location.href='register.php'" style="font-weight:bold">Create New Account</button>
</div>
</form>
</div>
</div>
</div>
</body>
</html>

<?php
if(isset($_POST['SUB']))
{
	
$username=$_POST['name'];
echo $username;
$passwor=$_POST['pass'];
echo $passwor;
$sql="SELECT * FROM register WHERE username='$username' AND password='$passwor'";

$rs=$mysqli->query($sql);

	if ($rs->num_rows==1)
{
	$_SESSION['username']=$username;
header("location:home.php");
}
else
{
echo "<script>alert('Invalid Username or Password')</script>".$mysqli->error;
}
//close connection
$mysqli->close();
}
?>

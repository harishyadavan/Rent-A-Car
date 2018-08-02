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

body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
	background-image:url('c4.jpg');
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
	</head>
	<body>
		
	               		<center><h1 class="title" style="color:black;">Register Form</h1></center>
	            
				<form class="form-horizontal" method="POST">
				<div class="main-login main-center">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa"  aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" required placeholder="Enter your Name"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" required placeholder="Enter your Email"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" required placeholder="Enter your Username"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" required placeholder="Enter your Password"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" required placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="SUB" style="font-weight:bold">Register</button>
							<br><a href="login.php">Already having account</a>
						</div>
						<div class="login-register">
				            <a href="login.php">Cancel</a>
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
	extract($_POST);
	$sql="INSERT INTO `register` VALUES ('$name','$email','$username','$password','$confirm')";
		if ($mysqli->query($sql)===true) 
		{
			if(strcmp($password,$confirm)===0)
			{	
		echo "<script>alert('Registration successfull');</script><br>";
			
		      }
		else 
			echo "<script>alert('password Miss Matching');</script><br>";
		}
		else
		{
			echo "ERROR: Could not execute query:$sql.".$mysqli->error;
		}
		//close connection
		$mysqli->close();
}
?>
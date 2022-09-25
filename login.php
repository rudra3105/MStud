<?php
	require('database.php');
	session_start();
	if(isset($_SESSION["email"]))
	{
		session_destroy();
	}
	
	//$ref=@$_GET['q'];	
	
	if(isset($_POST['submit']))
	{	
	$email = $_POST['email'];
	$sqlch=mysqli_query($con,"select * from registration where Enrollment_Number = '$email'");
	$r1=mysqli_num_rows($sqlch);

	if($r1==true)
	{
		
		echo "<Center> <h2 style='color:red'>You Have already completed your registration</h2></Center>";
		header("Refresh:5; url=login");

	}
	else
	{
	$email = $_POST['email'];
	$pass = $_POST['password'];		
		 
	$database= new mysqli('localhost','root','','quiz')or die("Could not connect to mysql".mysqli_error($con));
	$str1="SELECT Defaulter,Hostel_Defaulter,Lib_Defaulter from reg WHERE enrollment_number ='$email' AND Valid = 0";
	$str = mysqli_query($database, $str1);
		
	while($row = mysqli_fetch_array($str)) {
	
	$Def = $row['Defaulter'];
	
	$Hostel_Def = $row['Hostel_Defaulter'];
	
	$Lib_Def = $row['Lib_Defaulter'];
		
	if ($Def=='YES' || $Hostel_Def=='YES' || $Lib_Def=='YES')
	{
          echo "<center><h3><script>alert('Sorry.. This Enrollment Number is Under Defaulter list, Kindly clrear your dues !!');</script></h3></center>";
          header("Refresh:1; url=login");
    }
	else
	{
			echo "<center><h3><script>alert('You are out of Defaulter list, Kindly continue !!');</script></h3></center>";
			header("Refresh:0; url=register?id=$email");
	}
	}
	}
	}
?>

<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="image/favicon.ico" type="image/ico">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login | Online Semester Registration Portal - MBIT</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/bg10.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
		  <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
		  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script>
	window.oncontextmenu = function () {
				return false;
			}
			$(document).keydown(function (event) {
				if (event.keyCode == 123) {
					return false;
				}
				else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
					return false;
				}
			});
</script>
		  
		  <style>
.btn1 {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btn1:hover {
  background-color: #E06666;
  color: white;
}
</style>
		  
		  
	</head>

	<body oncontextmenu="return false;>

	
	<img src="image/MBIT12.png" width=200 height=200 alt="MStudlogo">
	
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
						<center> <h5 style="font-family: Noto Sans;"> </h5><h4 style="font-family: Noto Sans;">Online Semester Registration Portal</h4></center><br>
							<form method="post" action="login.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Enter Your enrollment Number:</label>
									<input type="text" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Enter Your Password:
										
									</label>
									<input type="password" name="password" class="form-control">
								</div> 
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Login</button>
								</div>
								
							</form>
						<br>	<Center><button class="btn1" onclick="window.location.href='index.php'">Admin Panel Login</button></Center>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
	<script type="text/javascript">
  $(document).ready(function() {
      window.history.pushState(null, "", window.location.href);        
      window.onpopstate = function() {
          window.history.pushState(null, "", window.location.href);
      };
  });
</script>
</html>
<?php
	require('database.php');

	if(isset($_POST['submit']))
	{	
		$email = $_POST['email'];
		$pass = $_POST['password'];		

	if ($email=='HOD' || $pass=='HOD')
	{
          echo "<center><h3><script>alert('Welcome to HOD Login');</script></h3></center>";
          header("Refresh:1; url=All _View");
    }
	else if ($email=='Account' || $pass=='Account')
	{
			echo "<center><h3><script>alert('Welcome to Account Login');</script></h3></center>";
			header("Refresh:0; url=Account");
	}
	else if ($email=='Library' || $pass=='Library')
	{
			echo "<center><h3><script>alert('Welcome to Library Login');</script></h3></center>";
			header("Refresh:0; url=lib");
	}
	else if ($email=='Hostel' || $pass=='Hostel')
	{
			echo "<center><h3><script>alert('Welcome to Hostel Login');</script></h3></center>";
			header("Refresh:0; url=Hostel");
	}
	else
	{
		echo "<center><h3><script>alert('Wrong Login Credentials');</script></h3></center>";
		header("Refresh:1; url=System");
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
		<title>Admin Panel Login | Online Semester Registration Portal - MBIT</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
		  
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
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
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
						<center> <h5 style="font-family: Noto Sans;"> </h5><h4 style="font-family: Noto Sans;">Online Semester Registration Portal</h4> <h3> Admin Panel </h3></center><br>
							<form method="post" action="System.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Enter User Id:</label>
									<input type="text" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Enter Password:
										
									</label>
									<input type="password" name="password" class="form-control">
								</div> 
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Login</button>
								</div>
								
							</form>
							<br>	<Center><button class="btn1" onclick="window.location.href='index.php'">Student Login Portal</button></Center>
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
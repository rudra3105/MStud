<?php
	include("database.php");
	//session_start();
	error_reporting(E_ERROR | E_PARSE);
	$id = $_GET['id']; 
	
	if(isset($_POST['submit']))
	{	
		$name = $_POST['name'];
		$name = stripslashes($name);
		$name = addslashes($name);

		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);
		
		$name = $_REQUEST['name'];
		$en_no = $_REQUEST['en_no'];
		$dept = $_REQUEST['dept'];
		$semester = $_REQUEST['semester'];
		$birthday = $_REQUEST['birthday'];
		$bloodGroup = $_REQUEST['bloodGroup'];
		$cast = $_REQUEST['cast'];
		$email = $_REQUEST['email'];
		$no1 = $_REQUEST['no1'];
		$no2 = $_REQUEST['no2'];
		
		$h_name = $_REQUEST['hos_name'];
		$h_room = $_REQUEST['hos_room'];
		
		$Subject1 = $_REQUEST['Subject1'];
		$Subject2 = $_REQUEST['Subject3'];
		$Subject3 = $_REQUEST['Subject3'];
		$Subject4 = $_REQUEST['Subject4'];
		$Subject5 = $_REQUEST['Subject5'];
		$Subject6 = $_REQUEST['Subject6'];
		$Subject7 = $_REQUEST['Subject7'];
		$Subject8 = $_REQUEST['Subject8'];
		$Subject9 = $_REQUEST['Subject9'];
		$Subject10 = $_REQUEST['Subject10'];
		
		
			
			$str= "INSERT INTO `registration`(`Name`, `Enrollment_Number`, `Department`, `Semester`, `Birthday`, `BloodGroup`, `Caste`, `emailid`, `contact`, `Parents_Contact`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `Status`) VALUES ('$name','$en_no','$dept','$semester','$birthday','$bloodGroup','$cast','$email','$no1','$no2','$Subject1','$Subject2','$Subject3','$Subject4','$Subject5','$Subject6','$Subject7','$Subject8','$Subject9','$Subject10',now())";
			
			$status="UPDATE `reg` SET `Hostel_Name`='$h_name' ,`Room_no`='$h_room' ,`Contact`='$no1',`Status`=now() WHERE enrollment_number='$en_no'";
           
			if((mysqli_query($con,$str)))	
			{
				if((mysqli_query($con,$status)))
			echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
			header("Refresh:1; url=login.php");
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
		<title>Register | Online Semester Registration Portal</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css"> 
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css"> 
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book1.jpg) ;
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
		  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	</head>

	<body  oncontextmenu="return false;>
	<img src="image/MBIT12.png" width=200 height=200 alt="MStudogo">
	<img src="image/MBIT12.png" width=200 height=200 alt="MStudlogo">
	
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					 <div class="box box-border">
						<div class="box-body">
							<center> <h5 style="font-family: Noto Sans;"> </h5><h4 style="font-family: Noto Sans;">Online Semester Registration Portal</h4><br> </center>
							<form autocomplete="off" method="post" action="register.php" enctype="multipart/form-data">
                                <div class="form-group">
									<label>Enter Your Full Name:</label>
									<input type="text" name="name" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Enrollment No:</label>
									<input type="text" name="en_no1" class="form-control" value=<?php echo $id;?> required disabled />
								</div>
								<div class="form-group">
									<label>Verify Your Enrollment No:</label>
									<input type="text" name="en_no" class="form-control"  required />
								</div>
								<div class="form-group">
								<label for="dept">Department:</label>
  								<select id="dept" name="dept">
   								 <option value="CE">CE</option>
   								 <option value="IT">IT</option>
  									</select>
								</div>
								<div class="form-group">
								<label for="sem">Semester:</label>
  								<select id="sem" name="semester">
   								<! –– 	<option value="1">1</option>––>
   								 	<option value="2">2</option>
								<! ––	<option value="3">3</option>––>
   								 	<option value="4">4</option>
								<! ––	<option value="5">5</option>––>
   								<! ––	<option value="6">6</option>––>
								<! ––	<option value="7">7</option>––>
   								<! –– 	<option value="8">8</option>––>
  									</select>
								<div class="form-group">
								<label for="birthday">Birthday: </label>
 								 <input type="date" id="birthday" name="birthday">	
								(DD/MM/YYYY)
								</div>
								
								<div class="form-group">
									<label>If you are staying at Hostel Then Write Hostel Name:</label>
									<input type="text" name="hos_name" class="form-control"  />
								</div>
								
								<div class="form-group">
									<label>If you are staying at Hostel Then Write Hostel Room Number:</label>
									<input type="text" name="hos_room" class="form-control"  />
								</div>
								
								
								<div class="form-group">
									<label>Blood group:</label>
									<select id="blood" name="bloodGroup">
   								 	<option value="A+">A+</option>
   								 	<option value="B+">B+</option>
									<option value="AB+">AB+</option>
   								 	<option value="O+">O+</option>
									<option value="A-">A-</option>
   								 	<option value="B-">B-</option>
									<option value="AB-">AB-</option>
   								 	<option value="O-">O-</option>
  									</select>
								</div>
								
								
								
								<div class="form-group">
									<label>Caste:</label>
									<input type="text" name="cast" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Email Id:</label>
									<input type="email" name="email" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Contact No(Whatsapp)</label>
									<input type="number" name="no1" class="form-control" min="1" max="10000000000" required />
								</div>
                                <div class="form-group">
									<label>Father Contact No(Whatsapp)</label>
									<input type="number" name="no2" class="form-control" min="1" max="10000000000"required />
								</div>
								
							<!-- Subject Regestration	 -->
								<p class="small">
							<center> <h4 style="font-family: Noto Sans;">Subject selection </h4><br> </center>
							</p>
							
							
								<div class="form-group">
									<label>Select First Subject </label>
									<select id="sub1" name="Subject1" required>
   								 	<option value="Technical Writing and Soft Skills">Technical Writing and Soft Skills</option>
   								 	<option value="Discriate Mathematics">Discriate Mathematics</option>
									<option value="Operating System">Operating System</option>
   								 	<option value="Programming in Java">Programming in Java</option>
									<option value="Computer Organization and Architecture">Computer Organization and Architecture</option>
   								 	<option value="Enterpruniership Skills">Enterpruniership Skills</option>
									<option value="Seminar">Seminar</option>
  									</select>
								</div>
								
								<div class="form-group">
									<label>Select Second Subject </label>
									<select id="sub2" name="Subject2" required>
   								 	<option value="Technical Writing and Soft Skills">Technical Writing and Soft Skills</option>
   								 	<option value="Discriate Mathematics">Discriate Mathematics</option>
									<option value="Operating System">Operating System</option>
   								 	<option value="Programming in Java">Programming in Java</option>
									<option value="Computer Organization and Architecture">Computer Organization and Architecture</option>
   								 	<option value="Enterpruniership Skills">Enterpruniership Skills</option>
									<option value="Seminar">Seminar</option>
  									</select>
								</div>
								
								<div class="form-group">
									<label>Select Third Subject </label>
									<select id="sub3" name="Subject3" required>
   								 	<option value="Technical Writing and Soft Skills">Technical Writing and Soft Skills</option>
   								 	<option value="Discriate Mathematics">Discriate Mathematics</option>
									<option value="Operating System">Operating System</option>
   								 	<option value="Programming in Java">Programming in Java</option>
									<option value="Computer Organization and Architecture">Computer Organization and Architecture</option>
   								 	<option value="Enterpruniership Skills">Enterpruniership Skills</option>
									<option value="Seminar">Seminar</option>
  									</select>
								</div>
								
								<div class="form-group">
									<label>Select Fourth Subject </label>
									<select id="sub4" name="Subject4" required>
   								 	<option value="Technical Writing and Soft Skills">Technical Writing and Soft Skills</option>
   								 	<option value="Discriate Mathematics">Discriate Mathematics</option>
									<option value="Operating System">Operating System</option>
   								 	<option value="Programming in Java">Programming in Java</option>
									<option value="Computer Organization and Architecture">Computer Organization and Architecture</option>
   								 	<option value="Enterpruniership Skills">Enterpruniership Skills</option>
									<option value="Seminar">Seminar</option>
  									</select>
								</div>
								
								<div class="form-group">
									<label>Select Fifth Subject </label>
									<select id="sub5" name="Subject5" required>
   								 	<option value="Technical Writing and Soft Skills">Technical Writing and Soft Skills</option>
   								 	<option value="Discriate Mathematics">Discriate Mathematics</option>
									<option value="Operating System">Operating System</option>
   								 	<option value="Programming in Java">Programming in Java</option>
									<option value="Computer Organization and Architecture">Computer Organization and Architecture</option>
   								 	<option value="Enterpruniership Skills">Enterpruniership Skills</option>
									<option value="Seminar">Seminar</option>
  									</select>
								</div>
								
								<div class="form-group">
									<label>Select Sixth Subject </label>
									<select id="sub6" name="Subject6" required>
   								 	<option value="Technical Writing and Soft Skills">Technical Writing and Soft Skills</option>
   								 	<option value="Discriate Mathematics">Discriate Mathematics</option>
									<option value="Operating System">Operating System</option>
   								 	<option value="Programming in Java">Programming in Java</option>
									<option value="Computer Organization and Architecture">Computer Organization and Architecture</option>
   								 	<option value="Enterpruniership Skills">Enterpruniership Skills</option>
									<option value="Seminar">Seminar</option>
  									</select>
								</div>
								
								<div class="form-group">
									<label>Select Seventh Subject </label>
									<select id="sub7" name="Subject7" required>
   								 	<option value="Technical Writing and Soft Skills">Technical Writing and Soft Skills</option>
   								 	<option value="Discriate Mathematics">Discriate Mathematics</option>
									<option value="Operating System">Operating System</option>
   								 	<option value="Programming in Java">Programming in Java</option>
									<option value="Computer Organization and Architecture">Computer Organization and Architecture</option>
   								 	<option value="Enterpruniership Skills">Enterpruniership Skills</option>
									<option value="Seminar">Seminar</option>
  									</select>
								</div>
								
								<br>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Register</button>
								</div>
							<!--	<div class="form-group text-center">
									<span class="text-muted">Already have an account! </span> <a href="login.php">Login </a> Here..
								</div> -->
							</form>
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
<?php
    include_once 'database.php';
	error_reporting (E_ALL ^ E_NOTICE);
	$id = $_GET['id']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="image/favicon.ico" type="image/ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome | Online Semester Registration Portal</title>
  <link  rel="stylesheet" href="css/bootstrap.min.css"/> 
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>  
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
   <script src="js/jquery.js" type="text/javascript"></script> 
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
	
	
	<script>
function goBack()
  {
  window.history.back()
  }
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

</head>
<body oncontextmenu="return false"; >
<p align="right">
<button onclick="goBack()">Go Back</button>
</p>
   <nav class="navbar navbar-default title1">
	 <img src="image/MBIT12.png" align="center" width=200 height=200 alt="MStudlogo">
	
	<center> <h5 style="font-family: Noto Sans;"> </h5><h4 style="font-family: Noto Sans;">Online Semester Registration Portal</h4></center><br>
	
        <div class="container-fluid">
		
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			
        
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
        
        </ul>
        
            

       
        </div>
    </div>
    </nav>
    <br><br>
    <div class="container">
            <div class="row">
      <div class="col-md-12"> 
           

			   <?php  
					//$result = mysqli_query($con,"SELECT * FROM reg where Valid = 0 ORDER BY sem,enrollment_number") or die('Error');
					$result = mysqli_query($con,"SELECT * FROM registration  where enrollment_number = '$id'") or die('Error');
                    
					
					$rowcount=mysqli_num_rows($result);
					
					
					
					if ($rowcount > 0) 
					{
					echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                    <tr><center><b>View Data of Regestration</b></center><td></tr>';

                    while($row = mysqli_fetch_array($result)) {
                        
						$Name = $row['Name'];
						$Enrollment_Number = $row['Enrollment_Number'];
						$Department = $row['Department'];
						$Semester = $row['Semester'];
						$Birthday = $row['Birthday'];
						$BloodGroup = $row['BloodGroup'];
						$Caste = $row['Caste'];
						$emailid = $row['emailid'];
						$contact = $row['contact'];
						$Parents_Contact = $row['Parents_Contact'];
						$sub1 = $row['sub1'];
						$sub2 = $row['sub2'];
						$sub3 = $row['sub3'];
						$sub4 = $row['sub4'];
						$sub5 = $row['sub5'];
						$sub6 = $row['sub6'];
						$sub7 = $row['sub7'];
						$sub8 = $row['sub8'];
						$sub9 = $row['sub9'];
						$sub10 = $row['sub10'];
						$Status = $row['Status'];
					
					
					echo '<tr><b>Name  					:  </b>'.$Name.'</tr><br>';
					echo '<tr><b>Enrollment_Number  	:  </b>'.$Enrollment_Number.'</tr><br>';
					echo '<tr><b>Department  			:  </b>'.$Department.'</tr><br>';
					echo '<tr><b>Semester  				:  </b>'.$Semester.'</tr><br>';
					echo '<tr><b>Birthday  				:  </b>'.$Birthday.'</tr><br>';
					echo '<tr><b>BloodGroup  			:  </b>'.$BloodGroup.'</tr><br>';
					echo '<tr><b>Caste  				:  </b>'.$Caste.'</tr><br>';
					echo '<tr><b>emailid  				:  </b>'.$emailid.'</tr><br>';
					echo '<tr><b>contact  				:  </b>'.$contact.'</tr><br>';
					echo '<tr><b>Parents Contact  		:  </b>'.$Parents_Contact .'</tr><br>';
					echo '<tr><b>Subject 1  			:  </b>'.$sub1.'</tr><br>';
					echo '<tr><b>Subject 2  			:  </b>'.$sub2.'</tr><br>';
					echo '<tr><b>Subject 3  			:  </b>'.$sub3.'</tr><br>';
					echo '<tr><b>Subject 4  			:  </b>'.$sub4.'</tr><br>';
					echo '<tr><b>Subject 5  			:  </b>'.$sub5.'</tr><br>';
					echo '<tr><b>Subject 6  			:  </b>'.$sub6.'</tr><br>';
					echo '<tr><b>Subject 7  			:  </b>'.$sub7.'</tr><br>';
					echo '<tr><b>Subject 8  			:  </b>'.$sub8.'</tr><br>';
					echo '<tr><b>Subject 9  			:  </b>'.$sub9.'</tr><br>';
					echo '<tr><b>Subject 10  			:  </b>'.$sub10.'</tr><br>';
					echo '<tr><b>Date of Registration  	:  </b>'.$Status.'</tr><br>';
					
                    }
					}
					else
					{	
					echo '<h1><tr><b>Student did not Registered Yet! </b></tr><br></h1>';
					}
                    echo '</table></div></div>';
                  ?> 

                
</body>
</html>
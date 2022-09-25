<?php
    include_once 'database.php';
	error_reporting (E_ALL ^ E_NOTICE);
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
	<!-- <meta http-equiv="refresh" content="5" >  -->
	
</head>
<body>
<p align="right">
<button onclick="window.location='System.php';" id="myButton" class="float-left submit-button" >Log Out</button>
</p>


     <nav class="navbar navbar-default title1">
	 <img src="image/favicon.ico" width=200 height=200 alt="logo">
	 
	<center> <h5 style="font-family: Noto Sans;"> </h5><h4 style="font-family: Noto Sans;">Online Semester Registration Portal </h4></center><br>
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
                
                    $result = mysqli_query($con,"SELECT * FROM reg where Defaulter='yes' ORDER BY sem,enrollment_number") or die('Error');
                    echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                    <tr><center><b>Account Section</b></center><td></tr>
					<tr><td><center><b>S.N.</b></center></td><td><center><b>Semester </b></center></td><td><center><b>Enrollment Number </b></center></td><td><center><b>Name </b></center></td><td><center><b>Contact No. </b></center></td><td><center><b>Fees Pending</b></center></td><td><center><b>Defaulter</b></center></td><td><center><b>Action</b></center></td></tr>';
                    $c=1;
                    while($row = mysqli_fetch_array($result)) {
                        $title = $row['enrollment_number'];
						$name = $row['Name'];
						$sem = $row['sem'];
                        $total = $row['Defaulter'];
						$contact1 = $row['Contact'];
						$fees = $row['Fees_Pending'];
                        
						 echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$sem.'</center></td><td><center>'.$title.'</center></td><td><center>'.$name.'</center></td><td><center>'.$contact1.'</center></td><td><center>'.$fees.'</center></td><td><center>'.$total.'</center></td><td><a href="edit.php?id='.$title.'">Remove</a></td></tr>';
                    	
                   
                    }
                    
                    echo '</table></div></div>';
                  ?> 

                
</body>
</html>
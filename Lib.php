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
        <div>
	 <img src="image/MBIT12.png" style="vertical-allign:middle" width=200 height=200 alt="MStudlogo">
	 
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
                
                    $result = mysqli_query($con,"SELECT * FROM reg where Lib_Defaulter='yes' ORDER BY sem,enrollment_number") or die('Error');
                    echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                    <tr><center><b>Library Section</b></center><td></tr>
					<tr><td><center><b>S.N.</b></center></td><td><center><b>Semester </b></center></td><td><center><b>Enrollment Number </b></center></td><td><center><b>Name </b></center></td><td><center><b>Contact No. </b></center></td><td><center><b>Defaulter</b></center></td><td><center><b>Action</b></center></td></tr>';
                    $c=1;
                    while($row = mysqli_fetch_array($result)) {
                        $title = $row['enrollment_number'];
						$name = $row['Name'];
						$sem = $row['sem'];
                        $total = $row['Lib_Defaulter'];
						$contact1 = $row['Contact'];
                       
					echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$sem.'</center></td><td><center>'.$title.'</center></td><td><center>'.$name.'</center></td><td><center>'.$contact1.'</center></td><td><center>'.$total.'</center></td><td><center><a href="edit2.php?id='.$title.'">Remove</a></center></td></tr>';
						
                   /* $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);	
                    if($rowcount == 0){
                        echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$sem.'</center></td><td><center>'.$title.'</center></td><td><center>'.$name.'</center></td><td><center>'.$contact1.'</center></td><td><center>'.$total.'</center></td><td><center><a href="edit2.php?id='.$title.'">Remove</a></center></td></tr>';
                     
					}
                    else
                    {
                    echo '<tr style="color:#99cc32"><td><center>'.$c++.'</center></td><td><center>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></center></td><td><center>'.$total.'</center></td><td><center>'.$sahi*$total.'</center></td><td><center><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="color:black;margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></center></td></tr>';
                    }*/
                    }
                    $c=0;
                    echo '</table></div></div>';
                  ?> 

                
</body>
</html>
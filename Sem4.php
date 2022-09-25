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
		<meta http-equiv="refresh" content="300">
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
<body oncontextmenu="return false; bgcolor="Grey">

<p align="right">
<button onclick="window.location='All _View.php';" >Main Page</button>
</p>
   <nav class="navbar navbar-default title1">
	 

	<center> <h5 style="font-family: Noto Sans;"> </h5><h4 style="font-family: Noto Sans;">Online Semester Registration Portal</h4></center><br>
<center> <h6>	Page will Automatically Refresh after 5 Minutes </h6> </center>
        <div class="container-fluid">
		
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			
        
        </div>

        
        <div class="row">
            <div class="col-md-12">
           
		<!--		<table class="table table-bordered" style="margin-top:50px">
				<tr>
					<th> Select Faculty :</th>
					<td>
						<select id="faculty" name="faculty" >
							<?php
							$sql=mysqli_query($con,"select DISTINCT(Councellor_name) from reg where sem=4 order by Councellor_name ");
							
							while($r=mysqli_fetch_array($sql))
							{
								echo "<option value='".$r['Councellor_name']."'>" .$r['Councellor_name']. "</option>";
								$sub = $r['Councellor_name'];
							}
							?>
						</select>
				
					</td>
				</tr>
			</table > 
		
<Center>	<button onclick="myFunction($sub)">Search</button> </center>  -->
<?php 	

				
					
				//	$result = mysqli_query($con,"SELECT * FROM reg where Councellor_name = 'Prof. x'  ORDER BY sem,enrollment_number") or die('Error');
					
					$result = mysqli_query($con,"SELECT * FROM reg where sem=4 ORDER BY sem,enrollment_number") or die('Error');
                    echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                    <tr><center><b>HOD & Councellor Login View</b></center><td></tr>
					<tr><td><center><b>S.N.</b></center></td><td><center><b>Councellor Name</b></center></td><td><center><b>Class & Batch</b></center></td><td><center><b>Enrollment Number</b></center></td><td><center><b>Name </b></center></td><td><center><b>Contact No. </b></center></td><td><center><b>Fees Pending</b></center></td><td><center><b>Account Defaulter</b></center></td><td><center><b>Hostel Defaulter</b></center></td><td><center><b>Hostel Name</b></center></td><td><center><b>Room No.</b></center></td><td><center><b>Library Defaulter</b></center></td><td><center><b>Registration Status </b></center></td><td><center><b>Currently Studying</b></center></td></tr>';
                    $c=1;

                    while($row = mysqli_fetch_array($result)) {
                        $title = $row['enrollment_number'];
						$name = $row['Name'];
						$sem = $row['sem'];
                        $total = $row['Defaulter'];
						$contact1 = $row['Contact'];
						$fees = $row['Fees_Pending'];
						$hostel = $row['Hostel_Defaulter'];
						$lib = $row['Lib_Defaulter'];
						$hos_name = $row['Hostel_Name'];
                        $room = $row['Room_no'];
						$Rstatus = $row['Status'];
						$valid_s = $row['Valid'];
						$cn = $row['Councellor_name'];
						$CB= $row['Class_Batch'];
						if ($valid_s == 0)
						{
							$valid_s = 'YES';
						}
						ELSE
						{
							$valid_s = 'NO / LEFT';
						}
						
						$Svalid = $valid_s != 'NO / LEFT' ? "<p> <font color=black> $valid_s </font> </p> ": "<p> <font color=red>  $valid_s </font> </p> ";
						
						$hos_status = $hostel != 'NO' ? "<p> <font color=red> $hostel </font> </p> ": "<p> <font color=black> $hostel </font> </p> ";
						
						$fees_status = $fees != '0' ? "<p> <font color=red> $fees </font> </p> ": "<p> <font color=black> $fees </font> </p> ";
						
						$Account_status = $total != 'NO' ? "<p> <font color=red> $total </font> </p> ": "<p> <font color=black> $total </font> </p> ";
						
						$lib_status = $lib != 'NO' ? "<p> <font color=red> $lib </font> </p> ": "<p> <font color=black> $lib </font> </p> ";

						//$hos_name_status = $hos_name != 'NA' ? "<p> <font color=blue> $hos_name </font> </p> ": "<p> <font color=black> $hos_name </font> </p> ";
						
						//$room_status = $room != 'NA' ? "<p> <font color=blue> $room </font> </p> ": "<p> <font color=black> $room </font> </p> ";
						
                        						
						echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$cn.'</center></td><td><center>'.$CB.'</center></td><td><center><a href="View_data?id='.$title.'">'.$title.'</a></center></td><td><center>'.$name.'</center></td><td><center>'.$contact1.'</center></td><td><center>'.$fees_status.'</center></td><td><center>'.$Account_status.'</center></td><td><center>'.$hos_status.'</center></td><td><center>'.$hos_name.'</center></td><td><center>'.$room.'</center></td><td><center>'.$lib_status.'</center></td><td><center>'.$Rstatus.'</center></td><td><center>'.$Svalid.'</center></td></tr>';
						
						
						//echo $hos_name != 'NA' ? "<p> <font color=red> $hostel </font> </p> ": "<p> <font color=black> $hostel </font> </p> ";

                    }
                    $c=0;
                    echo '</table></div></div>';

                  ?>
  
 

                
</body>
</html>
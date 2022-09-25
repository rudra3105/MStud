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
.button {
  border-radius: 4px;
  background-color: #FFFFFF;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 600px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>


</head>
<body oncontextmenu="return false; bgcolor="Grey">

<p align="right">
<button onclick="window.location='System.php';" >Log Out</button>
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

        
        <div class="row">
            <div class="col-md-12">
           
		<!--		<table class="table table-bordered" style="margin-top:50px">
				<tr>
					<th> Select Faculty :</th>
					<td>
						<select id="faculty" name="faculty" >
							<?php
							$sql=mysqli_query($con,"select DISTINCT(Councellor_name) from reg order by Councellor_name ");
							
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
<Center>
<button class="button"><a href="sem2.php"><span>Semester 2 - 1210204 Series</span></a></button>
<br>
<button class="button"><a href="Sem4.php"><span>Semester 4 - 1200204 Series</span></a></button>
<br>
 </center>                
</body>
</html>
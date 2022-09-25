<?php

include_once 'database.php';
error_reporting (E_ALL ^ E_NOTICE);

$id = $_GET['id']; 

$qry = mysqli_query($con,"select * from reg where enrollment_number='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $edit = mysqli_query($con,"UPDATE `reg` SET `Lib_Defaulter`='NO' WHERE enrollment_number='$id'");
	header("Location:lib.php");
}
?>
<h3>Remove Name of Student <?php echo $_GET['id'];?> For Library Dues </h3>

<form method="POST">
  <input type="submit" name="update" value="Remove">
</form>
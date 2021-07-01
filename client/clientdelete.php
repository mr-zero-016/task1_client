<?php
include 'db.php';

	
$mail=$_GET['username'];
	
	$sql= "UPDATE `creg` SET `status` = '1' WHERE `email`='$mail'";
	$sql_run= mysqli_query($con,$sql);
	if ($sql_run) {

	echo "<script>alert('Success')</script>";
	header("location:../view.php");

	
}
else{
die(mysqli_error($con));
echo "<script>alert('Fail')</script>";
echo $mail;
	
}



// 	// header("location : digygoshow.php");
// }
// else{

// 	// echo "<script>alert('Failed')</script>";
// die(mysqli_error($con));
// }



?>
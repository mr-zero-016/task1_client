<?php
$con=mysqli_connect("localhost","root","")or die("Error");
$db=mysqli_select_db($con,"client") or die(mysqli_error($con));
date_default_timezone_set("Asia/Kolkata");
?>
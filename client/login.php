<?php
session_start(); 
include 'db.php';

// echo $_POST['uname']."Hii".$_POST['upwd'];
if(isset($_POST['email']) && isset($_POST['password'])) {
// if (isset($_POST['submit'])) {
	


	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
$uname = $_POST['email'];
$upwd = $_POST['password'];
// $varb = 'hello';
// echo $uname.$upwd."Hello";

if (empty($uname)) {
		header("Location: ..\index.php?error=User Name is required");
	    exit();
	}else if(empty($upwd)){
        header("Location:  ..\index.php?error=Password is required");
	    exit();
	}
else{
	$sql="SELECT * FROM `users` WHERE `Email` = '$uname' AND `Password` = '$upwd'";
	$sql_qry=mysqli_query($con,$sql);
	if (mysqli_num_rows($sql_qry) === 1) {
		$row =  mysqli_fetch_assoc($sql_qry);

		if ($row['Email'] === $uname && $row['Password'] === $upwd) {

			// echo "string";
			$_SESSION['uname']= $row['Email'];
			$_SESSION['upwd']= $row['password'];
			// // $_SESSION['id']= $row['id'];
			header("Location: ../home.php");
			// echo $row['username'];
			exit();
		}
		else{
				header("Location:  ..\index.php?error=Incorect User name or password");
		        exit();
			}



}	
else{
			header("Location:  ..\index.php?error=Incorect Username  or password");
	        exit();
}

}
}
else{

	header("Location: ..\index.php?error=Incorect username and password");
	exit();
}



?>
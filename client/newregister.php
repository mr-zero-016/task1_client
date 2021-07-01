<?php 

include 'db.php';

error_reporting(0);

session_start();

// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

if (isset($_POST['submit'])) {
    $rid=$_POST['regid'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
    $sts=0;
	
		$sql = "SELECT * FROM `creg` WHERE `email`='$mail'";
		$result = mysqli_query($con, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO `creg` (`regid`, `name`, `phone`, `email`, `address`, `status`)
					VALUES (' $rid', '$name', '$phone', '$mail', ' $address','$sts')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')
                document.location ='../view.php';
                </script>";
               
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')
                document.location ='../home.php';
                </script>";
			}
		} else {
			echo "<script> 
            alert('Mail exi sts')
            document.location ='../home.php';
            ;</script>";
            
			
		}
        // header("location:../home.php");	
	} 
    else {
		echo "<script>alert('Error.')
        document.location ='../home.php';
        </script>";
	}

    
?>
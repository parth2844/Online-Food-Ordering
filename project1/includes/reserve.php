<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);    
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$date = mysqli_real_escape_string($conn, $_POST['date']);
	$time = mysqli_real_escape_string($conn, $_POST['time']);
    $size = mysqli_real_escape_string($conn, $_POST['size']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
	//Error handlers
	//Check for empty fields
	if (empty($email) || empty($size) || empty($name) || empty($phone) || empty($date) || empty($time)) {
		header("Location: ../reservation.php?form=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			header("Location: ../reservation.php?form=invalid");
			exit();
		}   else {
					
					//Insert the user into the database
					$sql = "INSERT INTO reservation (res_name, res_email, res_no, res_date, res_time, res_size, res_mes) VALUES ('$name', '$email', '$phone', '$date', '$time', '$size', '$message');";
					mysqli_query($conn, $sql);
                    echo "<script type='text/javascript'>alert('Table Successfully reserved');</script>";
					header("Location: ../index.php?reserve=success");
					exit();
				}
			}
		}
	

 else {
	header("Location: ../reservation.php");
	exit();
}
?>
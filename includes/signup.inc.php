<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$pin = mysqli_real_escape_string($conn, $_POST['pin']);
	

	//Error handlers
	//Check for empty fields
	if (empty($email) || empty($password) || empty($name) || empty($mobile) || empty($address) || empty($pin)) {
		header("Location: ../login.php?signup=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			header("Location: ../login.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../login.php?signup=email");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_name='$name'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../login.php?signup=usertaken");
					exit();
				} else {
					//Hashing the password
					$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_email, user_pass, user_name, user_no, user_add, user_pin) VALUES ('$email', '$hashedPassword', '$name', '$mobile', '$address', '$pin');";
					mysqli_query($conn, $sql);
                    echo "<script type='text/javascript'>alert('Signup successful');</script>";
					header("Location: ../login.php?signup=success");
                    
					exit();
				}
			}
		}
	}

} else {
	header("Location: ../login.php");
	exit();
}
?>
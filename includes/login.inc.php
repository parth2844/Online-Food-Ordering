<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check if inputs are empty
	if (empty($email) || empty($password)) {
		header("Location: ../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../login.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($password, $row['user_pass']);
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_name'] = $row['user_name'];
					$_SESSION['u_no'] = $row['user_no'];
					$_SESSION['u_add'] = $row['user_add'];
                    $_SESSION['u_pin'] = $row['user_pin'];
                    echo "<script type='text/javascript'>alert('Login Successful');</script>";
					header("Location: ../order.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../login.php?login=error");
	exit();
}
?>
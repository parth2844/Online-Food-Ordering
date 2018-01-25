<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
    $item1 = mysqli_real_escape_string($conn, $_POST['item1']);
    $item2 = mysqli_real_escape_string($conn, $_POST['item2']);
    $item3 = mysqli_real_escape_string($conn, $_POST['item3']);
    $item4 = mysqli_real_escape_string($conn, $_POST['item4']);
    $item5 = mysqli_real_escape_string($conn, $_POST['item5']);
    $total=0;
    $id = $_SESSION["u_id"];
    
    $sql = "SELECT user_add,user_no FROM users WHERE user_id='1'";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $address=$row["user_add"];
    $phone=$row["user_no"];
    
    $sql = "SELECT prod_price,prod_name FROM product";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        if($row["prod_name"]=="$item1" or $row["prod_name"]=="$item2" or $row["prod_name"]=="$item3" or $row["prod_name"]=="$item4" or $row["prod_name"]=="$item5")
        {
            $total+=$row["prod_price"];
        }
    }
    
	//Error handlers
	//Check for empty fields
	if (empty($item1) && empty($item2) && empty($item3) && empty($item4) && empty($item5)) {
		header("Location: ../order.php?form=empty");
		exit();
	}else {
					
					//Insert the user into the database
					$sql = "INSERT INTO cart(item1, item2, item3, item4, item5, total, address, phone) VALUES ('$item1', '$item2', '$item3', '$item4', '$item5','$total','$address','$phone');";
					mysqli_query($conn, $sql);
                    echo "<script type='text/javascript'>alert('Order successful');</script>";
					header("Location: ../index.php?order=successful");
					exit();
           }
}
 else {
	header("Location: ../order.php");
	exit();
}
?>
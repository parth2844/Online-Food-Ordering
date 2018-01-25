<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Italian Avenue:Login</title>


<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="css/login.css">
<link rel="stylesheet" type="text/css"  href="css/navbar.css">
<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">    

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script type="text/javascript" src="js/a2.js"></script>-->

	
    <!-- <script> 
$("#commentForm").validate();

</script>-->
<script>
	function validateForm() {
    var x = document.forms["myForm"]["password"].value;
    var a = document.forms["myForm"]["name"].value;
    var p = document.forms["myForm"]["mobile"].value;
    var c = document.forms["myForm"]["pin_code"].value;
   	if ((c.length)!=6) {
        alert("Pin code length should be equal to 6");
        return false;
    }	
    if (p == "") {
        alert("Mobile number must be filled out");
        return false;
    }
    else if ((p.length)!=10) {
        alert("Mobile number length should be equal to 10");
        return false;
    }
    if (a == "") {
        alert("Name must be filled out");
        return false;
    }
    else if(a.search("[0-9]")!=-1){
        alert("No Digits are allowed in the name");
        return false;
    }
    if ((x.length)>4) {
        alert("Password length should not be greater than 4");
        return false;
    }
     var patt1 = "/\D/g";
     var result = x.match(patt1);
     var n=result.length;
     if(n>0)
     {
     	alert("Password should only consist of digits");
        return false;
    }
    
}

function validate_sign_in() {
    var q = document.forms["myForm1"]["email"].value;
    if (q == "") {
        alert("Email-id must be filled out");
        return false;
    }
    var p = document.forms["myForm1"]["password"].value;
    if (p == "") {
        alert("Password must be filled out");
        return false;
    }
    var patt1 = "/\D/g";
     var result = p.match(patt1);
     var n=result.length;
     if(n>0)
     {
     	alert("Password should only consist of digits");
        return false;
    }
}
</script>
</head>
<body>
<?php
	include_once 'header.php';
?>

<section id="contact">
			<div class="section-content">
				<h1 style="color:yellow">Create an account</h1>
				
			</div>
			<div class="contact-section">
			<div class="container">
				 <form method="POST" action="includes/signup.inc.php" name="myForm" onsubmit="return validateForm()"> 
					<div class="col-md-6 form-line">
						<div class="form-group">
					    	<label for="exampleInputEmail">*Email Address</label>
					    	<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter Email id" required>
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputPassword">*Password</label>
					    	<input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Enter a numeric password" required>
					  	</div>
			  			<div class="form-group">
			  				<label for="exampleInputUsername">*Your username</label>
					    	<input type="text" class="form-control" id="exampleInputUsername" name="name" placeholder="Enter Name">
				  		</div>
				  			
					  	
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
					    	<label for="telephone">*Mobile Number</label>
					    	<input type="text" id="telephone" class="form-control" name="mobile" placeholder="Enter your mobile no.">
			  			</div>	
			  			<div class="form-group">
			  				<label for ="Address">*Address</label>
			  			 	<textarea class="form-control" id="Address" name="address" placeholder="Enter Your Address" required></textarea>
			  			</div>
			  			<div class="form-group">
					    	<label for="pin_code">*Pin Code</label>
					    	<input type="text" class="form-control" id="pin_code" name="pin" placeholder=" Enter pin code" required>
			  			</div>
			  			<div>

			  				<button type="submit" class="btn btn-default submit" name="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Register</button>
			  			</div>
			  			
					</div>
				</form>
					
				<p style="color:red">* marked fields are required to be filled</p>
			</div>

		</div>

		 <div class="section-content">
			<h1 class="Login" style="color: yellow">Existing users-login</h1>
			<h3 style="color:rgb(0,255,200);">Sign in to quickly access addresses saved to your account.</h3>
		</div> 
		<div class="contact-section">
			<div class="container">
				<form name="myForm1" method="POST" action="includes/login.inc.php" onsubmit="return validate_sign_in()">
					<div class="col-md-6 form-line">
						<div class="form-group">
					    	<label for="exampleInputEmail">*Email Address</label>
					    	<input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder=" Enter Email id">
					  	</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
					    	<label for="exampleInputPassword">*Password</label>
					    	<input type="Password" class="form-control" id="exampleInputPassword" name="password" placeholder=" Enter  password">
					  	</div>
					  	<div>

			  				<button type="submit" class="btn btn-default submit" name="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Sign in</button>
			  			</div>
					</div>
				</form>
				<p style="color:red">* marked fields are required to be filled</p>
			</div>
		</div>


</section>

</body>
</html>
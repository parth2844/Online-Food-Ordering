<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Italian Avenue:Book A Table</title>


<!-- Stylesheet -->

    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link rel="stylesheet" type="text/css"  href="css/menu.css">
<link rel="stylesheet" type="text/css"  href="css/navbar.css">
<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">    
    
    
<style>
.form-group {
	color: rgb(0,255,200);
    font-size: 1.3em;
}
    
</style>
</head>
<body>
<?php
	include_once 'header.php';
?>
    
<!-- Page Content -->
<div class="container" style="margin-top: -50px;font-family: 'Teko', sans-serif;">

            
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="color: yellow;text-align: center">Book Your Table</h1>
    </div>
</div>
<!-- /.row -->


<!-- /.row -->

<!-- Content Row -->
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form action="includes/reserve.php" method="POST">

        <div class="form-group ">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" required value=""/>
        </div>
        <div class="form-group ">
            <label>Phone:</label>
            <input type="text" class="form-control" name="phone"  required value="" />
        </div>
        <div class="form-group ">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" required value="" />
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Booking Date:</label>
                    <input type="text" class="form-control" name="date" required value="" />
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Booking Time:</label>
                    <input type="text" class="form-control" name="time" required value="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Party size:</label>
                    <input type="text" class="form-control" name="size" required value="" />
                </div>
            </div>
        </div>
        
        <div class="form-group ">
            <label>Message:</label>
            <textarea rows="2" cols="100" class="form-control" name="message" maxlength="256" style="resize:none"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="submit" style="font-size:1.5em">Submit</button> <br><br>
        </form>    
    </div>
</div>
<!-- /.row -->
</div>
<!-- /.container -->
   
    
</body>
</html>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Italian Avenue</title>


<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css"  href="css/navbar.css">    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<!--Navigation Bar-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="index.php" style="color:rgb(196, 255, 30)">Italian Avenue</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['u_id'])): ?>
        <li><a href="about.php" class="page-scroll">About</a></li>
        <li><a href="menu.php" class="page-scroll">Menu</a></li>
        <li><a href="order.php" class="page-scroll">Order Now</a></li>
        <li><a href="reservation.php" class="page-scroll">Reserve</a></li>
        <li><a href="contact.php" class="page-scroll">Contact</a></li>
        <li><form action="includes/logout.inc.php" method="POST">
          <button type="submit" name="submit" class="btn btn-danger" style="margin-top:10px">Logout</button>
            </form></li>
          <?php else: ?>
        <li><a href="about.php" class="page-scroll">About</a></li>
        <li><a href="menu.php" class="page-scroll">Menu</a></li>
        <li><a href="login.php" class="page-scroll">Order Now</a></li>
        <li><a href="reservation.php" class="page-scroll">Reserve</a></li>
        <li><a href="contact.php" class="page-scroll">Contact</a></li>
        <li><a href="login.php" class="page-scroll">Login</a></li>
          <?php endif; ?>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>

<!--Carousel-->
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/intro-bg.jpg');"></div>
                
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/back.jpg');"></div>
                
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/about.jpg');"></div>
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        
        <div class="main-text">
        
            <h1 style="color:rgb(196, 255, 30)">Italian Avenue</h1>
            <p style="color:rgb(196, 255, 30)">Mangia bene, ridi spesso, ama molto</p><!-- Eat well, laugh often, love much-->
        </div>
        
    </header>
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>

</body>
</html>
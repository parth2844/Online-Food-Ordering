<?php
	session_start();
?>
<!--Navigation Bar-->
<nav id="menu" class="navbar navbar-default ">
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
          <button type="submit" name="submit" class="btn btn-danger" style="margin-top:10px" id="logout">Logout</button>
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

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Italian Avenue: Order Now</title>


<!-- Stylesheet -->
<link rel="stylesheet" type="text/css"  href="css/order.css">
<link rel="stylesheet" type="text/css"  href="css/navbar.css">    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/order.js"></script>

</head>
<body>
<?php
	include_once 'header.php';
?>
<!--Menu-->
<div class="container">
    
    <h1 style="color:rgb(255, 215, 0)">The Menu</h1>
    <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top:-6%;margin-left:84%">
        <span class="glyphicon glyphicon-shopping-cart"></span>  My Cart
    </a>    
    
    <div class="row">
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/wine1.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Gattinara</h4>
                <p class="card-text">A deep pomegranate red wine; with a delicate fruity and mineral fragrance with hints of cherries, rose, liquorice and pepper. </p>
                <p>Price:Rs <span class="product_price">450</span></p>
            </div>
            
            
            
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/wine2.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Lambrusco</h4>
                <p class="card-text">Lambrusco is a deliciously rich and deep red wine made from the ethereal Nebbiolo grape in the Piedmont region of north west Italy.</p>
                <p>Price:Rs <span class="product_price">500</span></p>
            </div>
            
        </div>
    </div>
        
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/pasta1.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Four Cheese Pasta</h4>
                <p class="card-text">This Four Cheese Pasta is ultra creamy and garlicky. It includes Romano, Parmesan, Mozzarella and cream cheese. </p>
                <p>Price:Rs <span class="product_price">350</span></p>
            </div>
            
        </div>
    </div>
        
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/pasta2.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Corn Cannelloni</h4>
                <p class="card-text">Pasta tubes with corn, cottage cheese and cream sauce.</p>
                <p>Price:Rs <span class="product_price">350</span></p>
            </div>
            
        </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/riso.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Mushroom Risotto</h4>
                <p class="card-text">Rich, creamy mushroom risotto with risotto rice, brandy, Parmesan and mushrooms.</p>
                <p>Price:Rs <span class="product_price">400</span></p>
            </div>
            
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/np.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Neapolitan Pizza</h4>
                <p class="card-text">Neapolitan pizza is prepared with simple and fresh ingredients: a basic dough, raw tomatoes, fresh mozzarella cheese, fresh basil, and olive oil.</p>
                <p>Price:Rs <span class="product_price">550</span></p>
            </div>
            
        </div>
    </div>
        
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/sici.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Sicilian Pizza</h4>
                <p class="card-text">Sicilian pizza is thick crusted and rectangular,topped with onions, anchovies, tomatoes, herbs and strong cheese such as caciocavallo and toma.</p>
                <p>Price:Rs <span class="product_price">350</span></p>
            </div>
            
        </div>
    </div>
        
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/tira.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Tiramisu</h4>
                <p class="card-text">Tiramisu is a popular coffee-flavoured Italian custard dessert.</p>
                <p>Price:Rs <span class="product_price">200</span></p>
            </div>
            
        </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/panna.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Panna Cotta</h4>
                <p class="card-text">Panna Cotta is an Italian dessert of sweetened cream thickened with gelatin and molded.</p>
                <p>Price:Rs <span class="product_price">250</span></p>
            </div>
            
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/zep.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Zeppole</h4>
                <p class="card-text">A zeppola is an Italian pastry consisting of a deep-fried dough ball of varying size.</p>
                <p>Price:Rs <span class="product_price">300</span></p>
            </div>
            
        </div>
    </div>
        
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/tar1.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Tartufo</h4>
                <p class="card-text">Tartufo is an Italian ice-cream dessert,composed of two or more flavors of ice cream(its our surprise package).</p>
                <p>Price:Rs <span class="product_price">350</span></p>
            </div>
            
        </div>
    </div>
        
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top" src="img/straw.jpg" alt="Image Unavaliable" width="150" height="100">
            <div class="card-body">
                <h4 class="card-title">Strawberry granit</h4>
                <p class="card-text">A Fresh Strawberry Granit is a semi-frozen dessert of sugar, water, and flavorings originally from Sicily.</p>
                <p>Price:Rs <span class="product_price">325</span></p>
            </div>
            
        </div>
    </div>
    </div>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
        <form action="includes/cart.php" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">My Cart</h3>
        </div>
        <div class="modal-body" id="cart">
        
                <div class="form-group ">
                    <label>Item 1:</label>
                    <select class="form-control" name="item1" id="item1">
                        <option>Gattinara</option>
                        <option>Lambrusco</option>
                        <option>Four Cheese Pasta</option>
                        <option>Corn Cannelloni</option>
                        <option>Mushroom Risotto</option>
                        <option>Neapolitan Pizza</option>
                        <option>Sicilian Pizza</option>
                        <option>Tiramisu</option>
                        <option>Panna Cotta</option>
                        <option>Zeppole</option>
                        <option>Tartufo</option>
                        <option>Strawberry granit</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label>Item 2:</label>
                    <select class="form-control" name="item2" id="item2">
                        <option>-</option>
                        <option>Gattinara</option>
                        <option>Lambrusco</option>
                        <option>Four Cheese Pasta</option>
                        <option>Corn Cannelloni</option>
                        <option>Mushroom Risotto</option>
                        <option>Neapolitan Pizza</option>
                        <option>Sicilian Pizza</option>
                        <option>Tiramisu</option>
                        <option>Panna Cotta</option>
                        <option>Zeppole</option>
                        <option>Tartufo</option>
                        <option>Strawberry granit</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label>Item 3:</label>
                    <select class="form-control" name="item3" id="item3">
                        <option>-</option>
                        <option>Gattinara</option>
                        <option>Lambrusco</option>
                        <option>Four Cheese Pasta</option>
                        <option>Corn Cannelloni</option>
                        <option>Mushroom Risotto</option>
                        <option>Neapolitan Pizza</option>
                        <option>Sicilian Pizza</option>
                        <option>Tiramisu</option>
                        <option>Panna Cotta</option>
                        <option>Zeppole</option>
                        <option>Tartufo</option>
                        <option>Strawberry granit</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label>Item 4:</label>
                    <select class="form-control" name="item4" id="item4">
                        <option>-</option>
                        <option>Gattinara</option>
                        <option>Lambrusco</option>
                        <option>Four Cheese Pasta</option>
                        <option>Corn Cannelloni</option>
                        <option>Mushroom Risotto</option>
                        <option>Neapolitan Pizza</option>
                        <option>Sicilian Pizza</option>
                        <option>Tiramisu</option>
                        <option>Panna Cotta</option>
                        <option>Zeppole</option>
                        <option>Tartufo</option>
                        <option>Strawberry granit</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label>Item 5:</label>
                    <select class="form-control" name="item5" id="item5">
                        <option>-</option>
                        <option>Gattinara</option>
                        <option>Lambrusco</option>
                        <option>Four Cheese Pasta</option>
                        <option>Corn Cannelloni</option>
                        <option>Mushroom Risotto</option>
                        <option>Neapolitan Pizza</option>
                        <option>Sicilian Pizza</option>
                        <option>Tiramisu</option>
                        <option>Panna Cotta</option>
                        <option>Zeppole</option>
                        <option>Tartufo</option>
                        <option>Strawberry granit</option>
                    </select>
                </div>
                
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" onclick="checkcart()">Check Total</button>
            <br><br>
          <p>Total=Rs <span id="total">0</span></p>
          <button class="btn btn-primary" type="submit" name="submit" value="submit">Place Order</button>
        </div>
        
      </div>
        </form>
    </div>
  </div>    
    
</body>
</html>
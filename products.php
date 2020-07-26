<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
	<link rel="shortcut icon" href="img/123.jpg"/>
        <title>Agronomics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
        <div class="jumbotron">
					<center>
                    <h1>Welcome to our Agronomics!</h1>
                    <p>We have variety of fruits ,vegetables and grains.No need to hunt around, we have all in one place.</p>
					</center>
		</div>			
			<div class="color">
					<div class="zone grid-wrapper">
                                <div class="box zone"><img src="img/apple.jpg" class="img-responsive img-rounded">
									<div class="pad">
										<div class="caption">
											<center>
                                            <h3>Apple</h3>
                                            <p>price Rs.120.00 per kilogram</p>
											</center>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										</div>	
									</div>		
                                </div>    
                                <div class="box zone"><img src="img/grapes.jpg" class="img-responsive img-rounded">
									<div class="pad">
										<div class="caption">
											<center>
                                            <h3>Grapes</h3>
                                            <p>price Rs.42.00 per kilogram</p>
											</center>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										</div>
									</div>		
                                </div>
								<div class="box zone"><img src="img/orange.jpg" class="img-responsive img-rounded">
									<div class="pad">
										<div class="caption">
											<center>
                                            <h3>Orange </h3>
                                            <p>price Rs.40.00 per kilogram</p>
											</center>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										</div>
									</div>		
                                </div>
					            <div class="box zone"><img src="img/carrot.jpg" class="img-responsive img-rounded">
									<div class="pad">
										<div class="caption">
											<center>
                                            <h3>Carrot </h3>
                                            <p>price Rs.30.00 per kilogram</p>
											</center>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										</div>	
									</div>		
                                </div>
								<div class="box zone"><img src="img/potatoes.jpg" class="img-responsive img-rounded">
									<div class="pad">
										<div class="caption">
											<center>
                                            <h3>Potato</h3>
                                            <p>price Rs.50.00 per kilogram</p>
											</center>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										</div>		
									</div>		
                                </div>
								<div class="box zone"><img src="img/tomatoes.jpg" class="img-responsive img-rounded">
									<div class="pad">
										<div class="caption">
											<center>
                                            <h3>Tomato </h3>
                                            <p>price Rs.20.00 per kilogram</p>
										    </center>	
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										</div>	
									</div>		
                                </div>
								<div class="box zone"><img src="img/rice.jpg" class="img-responsive img-rounded">
									<div class="pad">
										<div class="caption">
											<center>
                                            <h3>Rice </h3>
                                            <p>price Rs.45.00 per kilogram</p>
											</center>
                                        <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										</div>		
									</div>		
								</div>		
                                <div class="box zone"><img src="img/corn.jpg" class="img-responsive img-rounded">
									<div class="pad">
										<div class="caption">
											<center>
                                            <h3>Corn </h3>
                                            <p>price Rs.42.00 per kilogram</p>
											</center>		
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										</div>	
									</div>
                                </div>
								<div class="box zone"><img src="img/wheat.jpg" class="img-responsive img-rounded">
									<div class="pad">
										<div class="caption">
											<center>
                                            <h3>Wheat </h3>
                                            <p>price Rs.100.00 per kilogram</p>
											</center>	
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
										</div>	
									</div>		
                                </div>
					</div>	
			</div>
					<br>
           <footer class="footer">
                <center>
                   <p>Copyright &copy Agronomics All Rights Reserved.</p>
                </center>
           </footer>
        </div>
    </body>
</html>

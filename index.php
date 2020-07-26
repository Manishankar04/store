<?php
session_start();
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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Agronomics</h1>        				   
                       <h1>We sell You buy.</h1>
                       <a href="products.php" class="btn btn-danger" style="background-color:green">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/vegetable.jpg" alt="Vegetables">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Vegetables</p>
                                        <p>Best and variety vegetables are available.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/fruits.jpg" alt="Fruits">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Fruits</p>
                                    <p>variety and tasty fruits are available.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/Grain.png" alt="Grains">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Grains</p>
                                   <p>variety of Grains are available.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Agronomics. All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
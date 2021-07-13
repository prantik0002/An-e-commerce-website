<?php
require("common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Prancess</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell Smartphones.</h1>
                            <p>Flat 20% OFF on applying discount coupon </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container-fluid">
                 <div class="row" id="item_list">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading" class="p-bold"><p><h4>iPhone 11 Pro Max</h4></p></div>
                            <div class="panel-body"><img src="./img/iphone11 pro.png" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                              
                                <p>Battery : 4969 mAH</p>
                                <p>Camera : 36MP + 12MP + 10MP | 20MP Front Camera</p>
                                <p>RAM : 4GB ROM:128GB</p>
                                <p class="p-bold">Price : 1,17,100/-</p>                         
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading" class="p-bold"><p><h4>Samsung Galaxy A51</h4></p></div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-a51.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 12MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 25,250/-</p>                           
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading" class="p-bold"><p><h4>iPhone 7</h4></p></div>
                            <div class="panel-body"><img src="./img/iphone-7.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 12MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 29,999/-</p>                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>

<?php
require("common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Products</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php
        error_reporting(0);
        include 'header.php';
        include 'check-if-added.php';
         $user_id = $_SESSION['user_id'];
         $email = $_SESSION['email'];
         $name = $_SESSION['name'];
        
        ?>
        <div class="container-fluid" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1 class="text-center" class="po">Welcome <?php error_reporting(0); echo " $name"; ?> to Prancess!</h1>
                <p class="text-center">We have the best smartphones in the World . No need to hunt around, we have all in one place.</p>

            </div>
            

            <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading" class="p-bold"><p><h4>iPhone 11 Pro Max</h4></p></div>
                            <div class="panel-body"><img src="./img/iphone11 pro.png" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                              
                                <p>Battery : 4969 mAH</p>
                                <p>Camera : 36MP + 12MP + 10MP | 20MP Front Camera</p>
                                <p>RAM : 4GB ROM:128GB</p>
                                <p class="p-bold">Price : 1,17,100/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                error_reporting(0);
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                             <div class="panel-heading" class="p-bold"><p><h4>One Plus 7T Pro</h4></p></div>
                            <div class="panel-body"><img src="./img/one-plus-7T-pro.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                               
                                <p>Battery : 4085mAH</p>
                                <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 47,999/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading" class="p-bold"><p><h4>iPhone XS Max</h4></p></div>
                            <div class="panel-body"><img src="./img/iphone-xs-max.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                     
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 42MP + 20MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 99,999/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                

                
            </div>

            <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading" class="p-bold"><p><h4>iPhone XR</h4></p></div>
                            <div class="panel-body"><img src="./img/iphone-xr.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                                
                                <p>Battery : 4085mAH</p>
                                <p>Camera : 20MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 53,999/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

               <div class="col-md-4">
                    <div class="panel panel-default text-center">
                             <div class="panel-heading" class="p-bold"><p><h4>iPhone 8</h4></p></div>
                            <div class="panel-body"><img src="./img/iphone-8.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                              
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 20MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 41,999/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

               <div class="col-md-4">
                    <div class="panel panel-default text-center">
                             <div class="panel-heading" class="p-bold"><p><h4>Redmi K20 Pro</h4></p></div>
                            <div class="panel-body"><img src="./img/mi-redmi-k20-pro.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                               
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 29,999/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

               
            </div>

            <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                             <div class="panel-heading" class="p-bold"><p><h4>Redmi Note 8</h4></p></div>
                            <div class="panel-body"><img src="./img/mi-note-8.jpg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                                
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 20MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 6GB ROM:64GB</p>
                                <p class="p-bold">Price : 9,999/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
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
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
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
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

              

            </div>
            <hr>
            <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading" class="p-bold"><p><h4>Samsung Galaxy S9</h4></p></div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-s-9.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 24MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 30,999/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default text-center">
                             <div class="panel-heading" class="p-bold"><p><h4>Samsung Galaxy S10</h4></p></div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-s10.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                              
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 20MP + 20MP| 16MP Front Camera</p>
                                <p>RAM : 12GB ROM:1024GB</p>
                                <p class="p-bold">Price : 1,29,999/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="panel panel-default text-center">
                             <div class="panel-heading" class="p-bold"><p><h4>Samsung Galaxy S20 Ultra</h4></p></div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-s20-ultra.jpeg" class="img-responsive img-phone" alt="Phone"></div>
                            <div class="panel-footer">                               
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 97,999/-</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("footer.php"); ?>
    </body>

</html>


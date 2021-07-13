<?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SignUp</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-md-6">
                        <img src="img/samsung-galaxy-a51.jpeg" class="img-responsive signup-image" alt="Image">
              </div>
              <div class="col-md-6">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true"><?php error_reporting(0); echo $_GET['m1']; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true"><?php error_reporting(0); echo $_GET['m2']; ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php"; ?>
    </body>
</html>


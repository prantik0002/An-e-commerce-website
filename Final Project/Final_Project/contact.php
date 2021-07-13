<?php
    include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Contact</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
  <?php
            include 'header.php';
        ?>
    <div class="content" id="uo">
          <div class="container">
            
          <div class="row">
              <div class="col-md-8">
                <h2 class="p-bold">Live Support</h2>
                <div class="box-padding-10">
                <h4>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h4>
                <p class="text-muted">If you’re having problems with an order you made on Prancess, we’re here to help.you can write the name,email and your query and send it to us,we will try to solve it instantly.we have a 24/7 service only for your comfort.If your order is not confirmed or not delivered or any other issues you can contact us anytime. </p>
              </div>
              </div>

              <div class="col-md-4">
                <img src="./img/live-support.gif" class="img-responsive live-support-img" alt="Live Support">
              </div>
            </div>

            <div class="row">
              <div class="col-md-7">
              <h2 class="p-bold">Contact Us</h2>
              <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
              </div>
              </div>

              <div class="col-md-5">
                <div class="box-padding-rl">
                  <h2 class="p-bold">Contact Information</h2>
                  <p class="text-muted">691, Delhi - Jaipur Expy, Silokhera, Sector 15 Part 2,</p>
                  <p class="text-muted">Sector 15, Gurugram, Haryana 122001</p>
                  <p class="text-muted">INDIA</p>
                  <p class="text-muted">Phone : +91-821-0000000</p>
                  <p class="text-muted">Email : prancess123@gmail.com</p>
                                   
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
        include 'footer.php';
    ?>  
</body>
</html>

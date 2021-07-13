<?php

require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
 $user_id = $_SESSION["user_id"];
        $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $product_id = $row["item_id"];
            $query_update = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$product_id'";            
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Success</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include("footer.php");
        ?>
    </body>
</html>


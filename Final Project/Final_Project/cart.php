<?php
require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
    <body>
        <div class="container" id="content">
            <?php include 'header.php'; ?>
            
        <table class="table table-striped table-responsive">
        <?php
        if(isset($_GET['m1'])){
            $disc=$_GET["m1"];
            echo $_GET['m1'];
                    
        }
        $sum = 0;
        $user_id = $_SESSION['user_id'];
        $query ="SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
        if (mysqli_num_rows($result) >= 1) {
            ?>
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];                                    
                    $id = $row["id"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                if(isset($disc)){
                    $sum = $sum - $sum * (0.2);
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
        <?php
        ?>
    </table>
            <form action="discount.php" class="form-inline" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="Enter Discount Code ">                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
    
        
        <?php include("footer.php"); ?>
    </body>
</html>


<?php
require_once("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Settings</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        error_reporting(0);
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>


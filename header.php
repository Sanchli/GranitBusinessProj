<?php
session_start();
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NavBar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles1.css">
    </head>
    <body>

        <header>
            <img class="logo" src="logo.png" alt="logo" onclick="window.location.href='index.php'">
            <nav>
                <ul class="nav_links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="faqs.php">FAQS</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="contactUs.php">Contact Us</a></li>
                </ul>
                <div class="button">
                    <?php
                    if(isset($_SESSION['userId'])){
                       echo '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>';
                    }
                    else {
                        echo'<form action="login.php" method="post">
                        <button type="submit" name="login-submit">Sign In</button>
                    </form>';
                    }
                    ?>
                </div>
            </nav>
        </header>
    </body>
</html>

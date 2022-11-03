<?php

// include("./class/function.php");

$obj = new Clint_Side;

// $display_product = $obj->display_product_public();

// session_start();

?>


<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Titan</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" data-toggle="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" data-toggle="">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php" data-toggle="">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_us.php" data-toggle="">Contact Us</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="login_register.php" data-toggle="">Login/Registration</a>
                </li> -->
                <li class="Nav-item">
                    <?php
                    if (isset($_SESSION["clint_id"])) {
                        $user_id = $_SESSION["clint_id"];
                        $username = $_SESSION["clint_username"];
                    ?>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><?php echo $username ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Profile</a></li>
                        <li><a href="./logout.php">Logout</a></li>
                    </ul>
                </li>
            <?php } else { ?>
                <a class="nav-link" href="login_register.php" data-toggle="">Login/Registration</a>
            <?php } ?>
            </li>
            </ul>
        </div>
    </div>
</nav>
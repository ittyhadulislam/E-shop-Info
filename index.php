<?php

include("./class/function.php");

$obj = new Clint_Side;

$display_product = $obj->display_product_public();

session_start();

?>



<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <?php include_once("./includes/head.php") ?>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>

        <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Titan</a>
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
                        <li class="Nav-item">
                            <a class="nav-link" href="contact_us.php" data-toggle="">Contact Us</a>
                        </li>
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
        <section class="home-section home-fade home-full-height" id="home">
            <div class="hero-slider">
                <ul class="slides">
                    <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;https://wallpaperaccess.com/full/2974021.jpg&quot;);">
                        <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-1">This is Titan</div>
                                <div class="font-alt mb-30 titan-title-size-4"> Summer 2017</div>
                                <div class="font-alt mb-40 titan-title-size-1">Your online fashion destination</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
                            </div>
                        </div>
                    </li>
                    <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;https://wallpaperaccess.com/full/817555.jpg&quot;);">
                        <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-1"> This is Titan</div>
                                <div class="font-alt mb-40 titan-title-size-4">Exclusive products</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="main">
            <section class="module-small">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Latest in clothing</h2>
                        </div>
                    </div>
                    <div class="row multi-columns-row">
                        <?php while ($split_data_for_display = mysqli_fetch_assoc($display_product)) { ?>
                            <div class="col-sm-6 col-md-3 col-lg-3">
                                <div class="shop-item">
                                    <div class="shop-item-image">
                                        <img src="./upload_img/<?php echo $split_data_for_display["product_img1"] ?>" alt="<?php echo $split_data_for_display["product_title"] ?>" />
                                        <div class="shop-item-detail">
                                            <a class="btn btn-round btn-b" href="single_product.php?view=product_view&&id=<?php echo $split_data_for_display["id"] ?>">
                                                View Products
                                            </a>
                                        </div>
                                    </div>
                                    <h4 class="shop-item-title font-alt">
                                        <a href="single_product.php?view=product_view&&id=<?php echo $split_data_for_display["id"] ?>">
                                            <?php echo $split_data_for_display["product_title"] ?>
                                        </a>
                                    </h4>
                                    £ <?php echo $split_data_for_display["product_price"] ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row mt-30">
                        <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="products.php">See all products</a></div>
                    </div>
                </div>
            </section>
            <section class="module bg-dark-30" data-background="https://wallpaperaccess.com/full/4348607.jpg" style= "background-attachment:fixed;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt mb-0">Be inspired. Get ahead of trends.</h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div> -->
            </section>

            <?php include_once("./includes/exclusive_products.php") ?>

            <hr class="divider-w">
            <section class="module" id="news">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Our News</h2>
                        </div>
                    </div>
                    <div class="row multi-columns-row post-columns wo-border">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="post mb-40">
                                <div class="post-header font-alt">
                                    <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                                </div>
                                <div class="post-entry">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                </div>
                                <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="post mb-40">
                                <div class="post-header font-alt">
                                    <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                                </div>
                                <div class="post-entry">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                </div>
                                <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="post mb-40">
                                <div class="post-header font-alt">
                                    <h2 class="post-title"><a href="#">New lookbook</a></h2>
                                </div>
                                <div class="post-entry">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                </div>
                                <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="post mb-40">
                                <div class="post-header font-alt">
                                    <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                                </div>
                                <div class="post-entry">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                </div>
                                <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="post mb-40">
                                <div class="post-header font-alt">
                                    <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                                </div>
                                <div class="post-entry">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                </div>
                                <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="post mb-40">
                                <div class="post-header font-alt">
                                    <h2 class="post-title"><a href="#">New lookbook</a></h2>
                                </div>
                                <div class="post-entry">
                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                                </div>
                                <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="divider-w">
            <?php include_once("./includes/module_blog.php") ?>
            <hr class="divider-d">
            <?php include_once("./includes/footer.php") ?>
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <?php include_once("./includes/script.php") ?>
</body>

</html>
<?php
include("../class/function.php");

$obj = new DB_Connection();
$admin_function = new Admin_log_reg();

session_start();

if (isset($_SESSION["id"])) {
    $user_id = $_SESSION["id"];

    if ($user_id) {
        echo "<script>window.location.href='../dashboard/dashboard.php';</script>";
    }
}

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

        <?php include_once("./includes/navbar.php") ?>


        <div class="main">
            <?php include_once("./includes/login_header_section.php") ?>
            <?php include_once("./includes/login_register.php") ?>


            <div class="module-small bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">About Titan</h5>
                                <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                                <p>Email:<a href="#">somecompany@example.com</a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">Recent Comments</h5>
                                <ul class="icon-list">
                                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">Blog Categories</h5>
                                <ul class="icon-list">
                                    <li><a href="#">Photography - 7</a></li>
                                    <li><a href="#">Web Design - 3</a></li>
                                    <li><a href="#">Illustration - 12</a></li>
                                    <li><a href="#">Marketing - 1</a></li>
                                    <li><a href="#">Wordpress - 16</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="widget">
                                <h5 class="widget-title font-alt">Popular Posts</h5>
                                <ul class="widget-posts">
                                    <li class="clearfix">
                                        <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail" /></a></div>
                                        <div class="widget-posts-body">
                                            <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                            <div class="widget-posts-meta">23 january</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail" /></a></div>
                                        <div class="widget-posts-body">
                                            <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                                            <div class="widget-posts-meta">15 February</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider-d">
            <footer class="footer bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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
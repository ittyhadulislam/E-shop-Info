<?php
include("../class/function.php");

$products = new Product_Details();

session_start();

$user_id = $_SESSION["id"];

if ($user_id == null) {
    echo "<script>window.location.href='../admin/index.php';</script>";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./dashboard_includes/head.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php include_once("./dashboard_includes/top_nav.php") ?>
    <div id="layoutSidenav">
        <?php include_once("./dashboard_includes/side_nav.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php
                    if (isset($view)) {
                        if ($view == "dashboard") {
                            include("./view/dashboard_view.php");
                        } elseif ($view == "add_product") {
                            include("./view/add_product_view.php");
                        } elseif ($view == "manage_product") {
                            include("./view/manage_product_view.php");
                        } elseif ($view == "edit_img") {
                            include("./view/edit_img_view.php");
                        } elseif ($view == "edit_product") {
                            include("./view/edit_product_view.php");
                        }
                    }
                    ?>
                    <!-- <h1>Hi</h1> -->
                    <!-- edit_product -->
                </div>
            </main>
            <?php include_once("./dashboard_includes/footer.php") ?>
        </div>
    </div>
    <?php include_once("./dashboard_includes/script.php") ?>
</body>

</html>
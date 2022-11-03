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
        <?php include_once("./includes/navbar.php") ?>
        <div class="main">
            <section class="module bg-dark-60 shop-page-header" data-background="https://wallpaperaccess.com/full/4348628.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Shop Products</h2>
                            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="module-small">
                <div class="container">
                    <form class="row">
                        <div class="col-sm-4 mb-sm-20">
                            <select class="form-control">
                                <option selected="selected">Default Sorting</option>
                                <option>Popular</option>
                                <option>Latest</option>
                                <option>Average Price</option>
                                <option>High Price</option>
                                <option>Low Price</option>
                            </select>
                        </div>
                        <div class="col-sm-2 mb-sm-20">
                            <select class="form-control">
                                <option selected="selected">Woman</option>
                                <option>Man</option>
                            </select>
                        </div>
                        <div class="col-sm-3 mb-sm-20">
                            <select class="form-control">
                                <option selected="selected">All</option>
                                <option>Coats</option>
                                <option>Jackets</option>
                                <option>Dresses</option>
                                <option>Jumpsuits</option>
                                <option>Tops</option>
                                <option>Trousers</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-block btn-round btn-g" type="submit">Apply</button>
                        </div>
                    </form>
                </div>
            </section> -->
            <hr class="divider-w">
            <section class="module-small">
                <div class="container">
                    <div class="row multi-columns-row">
                        <?php while ($split_data_for_display = mysqli_fetch_assoc($display_product)) { ?>
                            <div class="col-sm-6 col-md-3 col-lg-3">
                                <div class="shop-item">
                                    <div class="shop-item-image"><img src="./upload_img/<?php echo $split_data_for_display["product_img1"] ?>" alt="<?php echo $split_data_for_display["product_title"] ?>" />
                                        <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</a></div>
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
                </div>
            </section>
            <?php include("./includes/module_blog.php") ?>
            <hr class="divider-d">
            <?php include("./includes/footer.php") ?>
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
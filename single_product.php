<?php

include("./class/function.php");

$obj = new Clint_Side();
$obj1 = new Product_Details();

$display_related_product = $obj->display_product_public();

if (isset($_GET["view"])) {
    if ($_GET["view"] == "product_view") {
        $id = $_GET["id"];
        $display_product = $obj1->product_details_display($id);
    }
}
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
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 mb-sm-40">
                            <a class="gallery" href="./upload_img/<?php echo $display_product["product_img1"] ?>">
                                <img src="./upload_img/<?php echo $display_product["product_img1"] ?>" alt="Single Product Image" />
                            </a>
                            <ul class="product-gallery">
                                <li><a class="gallery" href="./upload_img/<?php echo $display_product["product_img2"] ?>"></a><img src="./upload_img/<?php echo $display_product["product_img2"] ?>" alt="Single Product" /></li>
                                <li><a class="gallery" href="./upload_img/<?php echo $display_product["product_img3"] ?>"></a><img src="./upload_img/<?php echo $display_product["product_img3"] ?>" alt="Single Product" /></li>
                                <li><a class="gallery" href="./upload_img/<?php echo $display_product["product_img4"] ?>"></a><img src="./upload_img/<?php echo $display_product["product_img4"] ?>" alt="Single Product" /></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="product-title font-alt"><?php echo $display_product["product_title"] ?></h1>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-sm-12">
                                    <div class="price font-alt"><span class="amount">£<?php echo $display_product["product_price"] ?></span></div>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-sm-12">
                                    <div class="description">
                                        <p><?php echo $display_product["product_short_description"] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-sm-12">
                                    <div class="product_meta">
                                        Categories: <?php echo $display_product["product_category"] ?>
                                        <!-- <a href="#"> Man, </a>
                                        <a href="#">Clothing, </a>
                                        <a href="#">T-shirts</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-70">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs font-alt" role="tablist">
                                <li class="active"><a href="#description" data-toggle="tab"><span class="icon-tools-2"></span>Description</a></li>
                                <li><a href="#data-sheet" data-toggle="tab"><span class="icon-tools-2"></span>Data sheet</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <p><?php echo $display_product["product_details"] ?></p>
                                </div>
                                <div class="tab-pane" id="data-sheet">
                                    <table class="table table-striped ds-table table-responsive">
                                        <tbody>
                                            <tr>
                                                <th>Title</th>
                                                <th>Info</th>
                                            </tr>
                                            <tr>
                                                <td>Compositions</td>
                                                <td>Jeans</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td>44, 46, 48</td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>Black</td>
                                            </tr>
                                            <tr>
                                                <td>Brand</td>
                                                <td>Somebrand</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="divider-w">
            <section class="module-small">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Related Products</h2>
                        </div>
                    </div>
                    <div class="row multi-columns-row">
                        <?php while ($split_data_for_display = mysqli_fetch_assoc($display_related_product)) { ?>
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
                        <!-- <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="shop-item">
                                <div class="shop-item-image"><img src="assets/images/shop/product-11.jpg" alt="Accessories Pack" />
                                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                                </div>
                                <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="shop-item">
                                <div class="shop-item-image"><img src="assets/images/shop/product-12.jpg" alt="Men’s Casual Pack" />
                                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                                </div>
                                <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="shop-item">
                                <div class="shop-item-image"><img src="assets/images/shop/product-13.jpg" alt="Men’s Garb" />
                                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                                </div>
                                <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="shop-item">
                                <div class="shop-item-image"><img src="assets/images/shop/product-14.jpg" alt="Cold Garb" />
                                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                                </div>
                                <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <hr class="divider-w">
            <?php include_once("./includes/exclusive_products.php") ?>
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
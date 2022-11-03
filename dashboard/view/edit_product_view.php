<?php

$edit = new Product_Details();

if (isset($_GET["status"])) {
    if ($_GET["status"] == "edit_product") {
        $id = $_GET["id"];
        $display_product_data = $edit->product_details_display($id);
    }
}

if (isset($_POST["update_product_submit"])) {
    $edit->product_datails_update($_POST);
}

?>



<style>
    .image {
        border: none;
    }
</style>

<h1 class="mt-4">Edit Product</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Edit Product</li>
</ol>

<form action="" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $id ?>">
    <div class="form-group">
        <label for="exampleInputTitleText1">Title</label>
        <input type="text" name="update_title" class="form-control" id="exampleInputTitleText1" aria-describedby="titleHelp" placeholder="Enter Product Title" value="<?php echo $display_product_data["product_title"] ?>" require>
    </div>
    <div class="form-group">
        <label for="exampleInputPrice1">Price</label>
        <input type="number" name="update_price" class="form-control" id="exampleInputPrice1" placeholder=" Enter Product Price" value="<?php echo $display_product_data["product_price"] ?>" require>
    </div>
    <div class="form-group">
        <label for="exampleInputProductDetails1">Product Details</label>
        <!-- <input type="Product Details" class="form-control" id="exampleInputProduct Details1" placeholder=" Enter Product Product Details"> -->
        <textarea name="update_product_details" class="form-control" id="exampleInputProductDetails1" cols="30" rows="10" placeholder=" Enter Product Details" require><?php echo $display_product_data["product_details"] ?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputCategory1">Category</label>
        <input type="text" name="update_category" class="form-control" id="exampleInputCategory1" placeholder=" Enter Product Category separate with ','" value="<?php echo $display_product_data["product_category"] ?>" require>
    </div>
    <div class="form-group">
        <label for="exampleInputShort_Description1">Short Description</label>
        <!-- <input type="price" class="form-control" id="exampleInputPrice1" placeholder=" Enter Product Price"> -->
        <textarea name="update_short_description" class="form-control" id="exampleInputShortDescription1" cols="30" rows="10" placeholder=" Enter Short Description" require><?php echo $display_product_data["product_short_description"] ?></textarea>
    </div>
    <div class="form-group">
        <label class="mb-1" for="inputPostStatus">Post Status : </label>
        <select class="form-control" name="update_product_status" id="inputPostStatus">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>

    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <input type="submit" name="update_product_submit" class=" form-control btn btn-primary" value="Update Product Content">
</form>
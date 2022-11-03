<?php

$products = new Product_Details();

if (isset($_POST["product_submit"])) {
    $products->add_product($_POST);
}

?>

<style>
    .image {
        border: none;
    }
</style>


<h1 class="mt-4">Add Product</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Add Product</li>
</ol>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputTitleText1">Title</label>
        <input type="text" name="title" class="form-control" id="exampleInputTitleText1" aria-describedby="titleHelp" placeholder="Enter Product Title" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPrice1">Price</label>
        <input type="number" name="price" class="form-control" id="exampleInputPrice1" placeholder=" Enter Product Price" required>
    </div>
    <div class="form-group">
        <label for="exampleInputProductDetails1">Product Details</label>
        <!-- <input type="Product Details" class="form-control" id="exampleInputProduct Details1" placeholder=" Enter Product Product Details"> -->
        <textarea name="product_details" class="form-control" id="exampleInputProductDetails1" cols="30" rows="10" placeholder=" Enter Product Details" required></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputCategory1">Category</label>
        <input type="text" name="category" class="form-control" id="exampleInputCategory1" placeholder=" Enter Product Category separate with ','" required>
    </div>
    <div class="form-group">
        <label for="exampleInputShort_Description1">Short Description</label>
        <!-- <input type="price" class="form-control" id="exampleInputPrice1" placeholder=" Enter Product Price"> -->
        <textarea name="short_description" class="form-control" id="exampleInputShortDescription1" cols="30" rows="10" placeholder=" Enter Short Description" required></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputProductImage1">Enter Product Image</label>
        <input type="file" name="img-1" class="form-control image" id="exampleInputProductImage1" required>
    </div>
    <div class="form-group">
        <label for="exampleInputProductImage1">Enter Product Additional Image 1</label>
        <input type="file" name="img-2" class="form-control image" id="exampleInputProductImage1" required>
    </div>
    <div class="form-group">
        <label for="exampleInputProductImage1">Enter Product Additional Image 2</label>
        <input type="file" name="img-3" class="form-control image" id="exampleInputProductImage1" required>
    </div>
    <div class="form-group">
        <label for="exampleInputProductImage1">Enter Product Additional Image 3</label>
        <input type="file" name="img-4" class="form-control image" id="exampleInputProductImage1" required>
    </div>

    <div class="form-group">
        <label class="mb-1" for="inputPostStatus">Post Status : </label>
        <select class="form-control" name="product_status" id="inputPostStatus">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>

    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <input type="submit" name="product_submit" class=" form-control btn btn-primary" value="Submit">
</form>
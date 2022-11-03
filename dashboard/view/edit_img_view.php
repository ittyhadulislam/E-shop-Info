<?php
$products = new Product_Details();

if (isset($_GET["status"])) {
    if ($_GET["status"] == "edit_img") {
        $id = $_GET['id'];
        // $products->update_img();
    }
}

if (isset($_POST["update_image_submit"])) {
    $products->update_img($_POST);
}
?>


<h1 class="mt-4">Edit Image</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Edit Image</li>
</ol>

<div class="container shadow p-4">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="img_update" value="<?php echo $id ?>">
            <label for="exampleFormControlFile1">Enter Your Image</label>
            <input type="file" name="update_image" class="form-control-file" id="exampleFormControlFile1"><br><br>
        </div>
        <div class="form-group">
            <input type="submit" name="update_image_submit" value="Update Image" class="btn btn-primary">
        </div>
    </form>
</div>
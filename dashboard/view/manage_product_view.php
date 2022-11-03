<?php

$products = new Product_Details();

$read_product = $products->manage_product();

if (isset($_GET["status"])) {
    if ($_GET["status"] == "delete_product") {
        $delete_id = $_GET["id"];
        $products->product_details_delete($delete_id);
    }
}
?>

<h1 class="mt-4">Manage Product</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Manage Product</li>
</ol>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($fatch_product = mysqli_fetch_assoc($read_product)) { ?>
            <tr>
                <th scope="row"><?php echo $fatch_product["id"] ?></th>
                <td>
                    <img style="width: 5rem;" src="../upload_img/<?php echo $fatch_product["product_img1"] ?>" alt="">
                    <a href="edit_img.php?status=edit_img&&id=<?php echo $fatch_product["id"] ?>">Chnage</a>
                </td>

                <td><?php echo $fatch_product["product_title"] ?></td>
                <td><?php echo $fatch_product["product_price"] ?></td>
                <td>
                    <?php
                    if ($fatch_product["status"] == 1) {
                        echo "Published";
                    } elseif ($fatch_product["status"] == 0) {
                        echo "Unpublished";
                    }
                    ?>
                </td>
                <td>
                    <a href="edit_product.php?status=edit_product&&id=<?php echo $fatch_product["id"] ?>" rel="noopener noreferrer" class="btn btn-primary">EDIT</a>
                    <a href="?status=delete_product&&id=<?php echo $fatch_product["id"] ?>" rel="noopener noreferrer" class="btn btn-secondary ml-3">Delete</a>
                </td>

            </tr>
        <?php } ?>
        <!-- <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="btn btn-primary">EDIT</a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="btn btn-secondary ml-3">Delete</a>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="btn btn-primary">EDIT</a>
                <a href="http://" target="_blank" rel="noopener noreferrer" class="btn btn-secondary ml-3">Delete</a>
            </td>
        </tr> -->
    </tbody>
</table>
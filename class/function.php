<?php
class DB_Connection
{
    public $conn;

    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "e_shop_info";

        $this->conn =  mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (!$this->conn) {
            die("<script>alert('Database connection unsuccessful!!');</script>");
        }
    }
}

class Admin_log_reg extends DB_Connection
{
    public function admin_registration($data)
    {
        $admin_username = $data["admin_username"];
        $admin_email = $data["admin_email"];
        $admin_password = md5($data["admin_password"]);
        $admin_re_password = md5($data["admin_re-password"]);

        if ($admin_password == $admin_re_password) {
            $query = "INSERT INTO admin_panel(admin_username,admin_email,admin_pass,admin_c_pass) 
        VALUE('$admin_username','$admin_email','$admin_password','$admin_re_password')";

            if (mysqli_query($this->conn, $query)) {

                echo "<script>alert('Registration Successful !! ');</script>";
            } else {
                return "registration unsuccessful";
            }
        }
    }

    public function admin_login($data)
    {
        // admin_log_email
        // admin_log_password
        $admin_email = $data["admin_log_email"];
        $admin_pass = md5($data["admin_log_password"]);

        $query = "SELECT * FROM admin_panel WHERE admin_email = '$admin_email' AND admin_pass = '$admin_pass'";

        // echo $query;

        if (mysqli_query($this->conn, $query)) {
            $admin_info = mysqli_query($this->conn, $query);

            if ($admin_info) {
                // header("location : ./admin/example.php");
                // echo "<script>window.location.href='./example.php';</script>";
                $fatch_admin_info = mysqli_fetch_assoc($admin_info);

                if ($admin_email == $fatch_admin_info["admin_email"] && $admin_pass == $fatch_admin_info["admin_pass"]) {
                    echo "<script>window.location.href='../dashboard/dashboard.php';</script>";

                    session_start();
                    $_SESSION["username"] = $fatch_admin_info["admin_username"];
                    $_SESSION["id"] = $fatch_admin_info["admin_id"];
                }
            }
        }
    }
}

class Product_Details extends DB_Connection
{
    public function add_product($data)
    {
        $title = $data["title"];
        $price = $data["price"];
        $product_details = $data["product_details"];
        $category = $data["category"];
        $short_description = $data["short_description"];
        $img_1 = $_FILES["img-1"]["name"];
        $tmp_img_1 = $_FILES["img-1"]["tmp_name"];
        $img_2 = $_FILES["img-2"]["name"];
        $tmp_img_2 = $_FILES["img-2"]["tmp_name"];
        $img_3 = $_FILES["img-3"]["name"];
        $tmp_img_3 = $_FILES["img-3"]["tmp_name"];
        $img_4 = $_FILES["img-4"]["name"];
        $tmp_img_4 = $_FILES["img-4"]["tmp_name"];
        $product_status = $data["product_status"];


        $query = "INSERT INTO product_item_details(product_title,product_price,product_img1,product_img2,product_img3,product_img4,product_details,product_category,product_short_description,status)
        VALUE('$title',$price,'$img_1','$img_2','$img_3','$img_4','$product_details','$category','$short_description',$product_status)";

        if (mysqli_query($this->conn, $query)) {
            move_uploaded_file($tmp_img_1, "../upload_img/" . $img_1);
            move_uploaded_file($tmp_img_2, "../upload_img/" . $img_2);
            move_uploaded_file($tmp_img_3, "../upload_img/" . $img_3);
            move_uploaded_file($tmp_img_4, "../upload_img/" . $img_4);
            echo "<script>alert('Product Uploaded Successfully !! ');</script>";
        }
    }

    public function manage_product()
    {
        $query = "SELECT * FROM product_item_details";

        if (mysqli_query($this->conn, $query)) {
            $read_product = mysqli_query($this->conn, $query);

            return $read_product;
        }
    }

    public function update_img($data)
    {
        $id = $data["img_update"];
        $img = $_FILES["update_image"]["name"];
        $img_tmp = $_FILES["update_image"]["tmp_name"];

        $query = "UPDATE product_item_details SET product_img1='$img' WHERE id=$id";

        if (mysqli_query($this->conn, $query)) {
            move_uploaded_file($img_tmp, "../upload_img/" . $img);
            echo "<script>alert('Product Image Updated Successfully !! ');</script>";
        }
    }

    public function product_details_display($id)
    {
        $query = "SELECT * FROM product_item_details WHERE id=$id";

        if (mysqli_query($this->conn, $query)) {
            $product_info = mysqli_query($this->conn, $query);
            $product_data = mysqli_fetch_assoc($product_info);

            return $product_data;
        }
    }

    public function product_datails_update($data)

    {
        $update_title = $data["update_title"];
        $update_price = $data["update_price"];
        $update_product_details = $data["update_product_details"];
        $update_category = $data["update_category"];
        $update_short_description = $data["update_short_description"];
        $update_product_status = $data["update_product_status"];
        $product_id = $data["product_id"];

        $query = "UPDATE product_item_details SET product_title='$update_title', product_price=$update_price,product_details='$update_product_details', product_category='$update_category', product_short_description='$update_short_description', status=$update_product_status WHERE id=$product_id";

        if (mysqli_query($this->conn, $query)) {
            echo "<script>alert('Product Details Updated Successfully !! ');</script>";
        }
    }

    public function product_details_delete($id)
    {
        $take_row_query = "SELECT * FROM product_item_details WHERE id=$id";
        $connection_query = mysqli_query($this->conn, $take_row_query);
        $fatch_data_for_image = mysqli_fetch_assoc($connection_query);
        $delete_img1 = $fatch_data_for_image["product_img1"];
        $delete_img2 = $fatch_data_for_image["product_img2"];
        $delete_img3 = $fatch_data_for_image["product_img3"];
        $delete_img4 = $fatch_data_for_image["product_img4"];

        $delete_query = "DELETE FROM product_item_details WHERE id=$id";

        if (mysqli_query($this->conn, $delete_query)) {
            unlink("../upload_img/" . $delete_img1);
            unlink("../upload_img/" . $delete_img2);
            unlink("../upload_img/" . $delete_img3);
            unlink("../upload_img/" . $delete_img4);
            echo "<script>alert('Product Deleted Successfully !! ');</script>";
        }
    }
}


class Clint_Side extends DB_Connection
{

    public function clint_registration($data)
    {
        $clint_username = $data["clint_username"];
        $clint_email = $data["clint_email"];
        $clint_password = md5($data["clint_password"]);
        $clint_re_password = md5($data["clint_re-password"]);

        if ($clint_password == $clint_re_password) {
            $query = "INSERT INTO clint_log_reg(clint_username,clint_email,clint_pass,clint_c_pass) 
        VALUE('$clint_username','$clint_email','$clint_password','$clint_re_password')";

            if (mysqli_query($this->conn, $query)) {

                echo "<script>alert('Registration Successful !! ');</script>";
            } else {
                return "registration unsuccessful";
            }
        }
    }

    public function clint_login($data)
    {
        // clint_log_email
        // clint_log_password
        $clint_email = $data["clint_log_email"];
        $clint_pass = md5($data["clint_log_password"]);

        $query = "SELECT * FROM clint_log_reg WHERE clint_email = '$clint_email' AND clint_pass = '$clint_pass'";

        // echo $query;

        if (mysqli_query($this->conn, $query)) {
            $clint_info = mysqli_query($this->conn, $query);

            if ($clint_info) {
                // header("location : ./admin/example.php");
                // echo "<script>window.location.href='./example.php';</script>";
                $fatch_clint_info = mysqli_fetch_assoc($clint_info);

                if ($clint_email == $fatch_clint_info["clint_email"] && $clint_pass == $fatch_clint_info["clint_pass"]) {
                    header("location: ./index.php");

                    session_start();
                    $_SESSION["clint_username"] = $fatch_clint_info["clint_username"];
                    $_SESSION["clint_id"] = $fatch_clint_info["clint_id"];
                }
            }
        }
    }


    public function display_product_public()
    {
        $query = "SELECT * FROM product_item_details WHERE status=1";

        if (mysqli_query($this->conn, $query)) {
            $product_info = mysqli_query($this->conn, $query);

            return $product_info;
        }
    }
}

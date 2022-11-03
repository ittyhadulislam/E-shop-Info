<?php

include("./class/function.php");

$clint_info = new Clint_Side();

if (isset($_POST["clint_reg_submit"])) {
    $return = $clint_info->clint_registration($_POST);
}

if (isset($_POST["clint_log_submit"])) {
    $retyrn_msg = $clint_info->clint_login($_POST);

    // var_dump($retyrn_msg);
}

session_start();


if (isset($_SESSION["clint_id"])) {
    $user_id = $_SESSION["clint_id"];

    if ($user_id) {
        header("location: ./index.php");
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
            <section class="module bg-dark-30" data-background="https://swall.teahub.io/photos/small/44-445196_hd-car-wallpapers-group-2014-jaguar-xkr-s.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h1 class="module-title font-alt mb-0">Login-Register</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
                            <h4 class="font-alt">Login</h4>
                            <hr class="divider-w mb-10">
                            <form class="form" action="" method="POST">
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" name="clint_log_email" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" type="password" name="clint_log_password" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-round btn-b" name="clint_log_submit" value="Login">
                                </div>
                                <div class="form-group"><a href="">Forgot Password?</a></div>
                            </form>
                        </div>
                        <div class="col-sm-5">
                            <h4 class="font-alt">Register</h4>
                            <hr class="divider-w mb-10">
                            <form class="form" action="" method="POST">
                                <div class="form-group">
                                    <input class="form-control" id="E-mail" type="email" name="clint_email" placeholder="Email" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="username" type="text" name="clint_username" placeholder="Username" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" type="password" name="clint_password" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="re-password" type="password" name="clint_re-password" placeholder="Re-enter Password" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-block btn-round btn-b" name="clint_reg_submit" value="Register">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


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
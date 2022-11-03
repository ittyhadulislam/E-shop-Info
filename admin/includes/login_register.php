<?php

$admin_function = new Admin_log_reg();

if (isset($_POST["admin_reg_submit"])) {
    $return = $admin_function->admin_registration($_POST);
}

if (isset($_POST["admin_log_submit"])) {
    $retyrn_msg = $admin_function->admin_login($_POST);

    var_dump($retyrn_msg);
}

?>


<section class="module">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
                <h4 class="font-alt">Login</h4>
                <hr class="divider-w mb-10">
                <form class="form" action="" method="POST">
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" name="admin_log_email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="password" type="password" name="admin_log_password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-round btn-b" name="admin_log_submit" value="Login">
                    </div>
                    <div class="form-group"><a href="">Forgot Password?</a></div>
                </form>
            </div>
            <div class="col-sm-5">
                <h4 class="font-alt">Register</h4>
                <hr class="divider-w mb-10">
                <form class="form" action="" method="POST">
                    <div class="form-group">
                        <input class="form-control" id="E-mail" type="email" name="admin_email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="username" type="text" name="admin_username" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="password" type="password" name="admin_password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="re-password" type="password" name="admin_re-password" placeholder="Re-enter Password" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-round btn-b" name="admin_reg_submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
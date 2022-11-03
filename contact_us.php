<?php

include("./class/function.php");

$obj = new Clint_Side;

// $display_product = $obj->display_product_public();

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
            <section class="module bg-dark-60 contact-page-header" data-background="https://wallpaperaccess.com/full/1485943.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Contact Us</h2>
                            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="font-alt">Get in touch</h4><br />
                            <form id="contactForm" role="form" method="post" action="php/contact.php">
                                <div class="form-group">
                                    <label class="sr-only" for="name">Name</label>
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                                </div>
                            </form>
                            <div class="ajax-response font-alt" id="contactFormResponse"></div>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="font-alt">Additional info</h4><br />
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend.</p>
                            <hr />
                            <h4 class="font-alt">Business Hours</h4><br />
                            <ul class="list-unstyled">
                                <li>Mo - Fr: 8am to 6pm</li>
                                <li>Sa, Su: 10am to 2pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="map-section">
                <div id="map"></div>
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
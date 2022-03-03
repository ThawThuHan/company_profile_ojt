<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php include "layouts/header.php"; ?>

    <?php
    $page = "Service";
    include "layouts/page_banner.php"
    ?>

    <!-- our service -->
    <div class="container-fluid" style="background-color:  #F2F4FE;">
        <div class="container py-5 text-center">
            <p class="text-muted">Our Services</p>
            <h1>See What can we do for <br> <span class="text-info">Your Project</span></h1>
            <div class="row pt-3 services">
                <div class="col-6 col-md-3">
                    <img src="assets/Icons/web-development.png" alt="">
                    <p class="fw-bold">Web Development</p>
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/Icons/software.png" alt="">
                    <p class="fw-bold">Graphic Design</p>
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/Icons/seo.png" alt="">
                    <p class="fw-bold">SEO & Marketing</p>
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/Icons/support.png" alt="">
                    <p class="fw-bold">Customer Services</p>
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/Icons/app-development.png" alt="">
                    <p class="fw-bold">App Development</p>
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/Icons/user-interface.png" alt="">
                    <p class="fw-bold">UI/UX Desing</p>
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/Icons/product.png" alt="">
                    <p class="fw-bold">Product Desing</p>
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/Icons/analytics.png" alt="">
                    <p class="fw-bold">Data Analyst</p>
                </div>
            </div>
        </div>
    </div>

    <?php include "layouts/footer.php"; ?>

    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php include "layouts/header.php"; ?>

    <?php
    $page = "About";
    include "layouts/page_banner.php"
    ?>

    <!-- about us -->
    <div class="container about-container">
        <div class="row g-3">
            <div class="col-12 col-md-6">
                <p class="text-muted">About us</p>
                <h2>
                    We are <span class="text-info">Professional Teams</span><br> to Growth your Business
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptate cum delectus! Inventore vero nemo sapiente voluptate eum, rerum a voluptatibus deleniti nam libero omnis. Placeat tempore autem beatae vel?</p>
                <button class="btn btn-info text-white">Read more</button>
            </div>
            <div class="col-12 col-md-6 about">
                <img src="assets/images/about.jpg" alt="about us">
            </div>
        </div>
    </div>

    <!-- clients -->
    <div class="container-fluid bg-light">
        <div class="container d-flex flex-wrap justify-content-between py-5">
            <img src="assets/images/clients/airbnb.png" alt="">
            <img src="assets/images/clients/google.png" alt="">
            <img src="assets/images/clients/mailchimp.png" alt="">
            <img src="assets/images/clients/paypal.png" alt="">
            <img src="assets/images/clients/stripe.png" alt="">
        </div>
    </div>

    <?php include "layouts/footer.php"; ?>

    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
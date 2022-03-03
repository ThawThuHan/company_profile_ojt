<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <!-- header -->
    <?php include "layouts/header.php"; ?>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide position-relative" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/Slider 1.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/Slider 2.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/Slider 3.jpg" class="d-block" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="position-absolute text-center top-50 start-50 translate-middle">
            <h4 class="text-white fw-bold">We're Design Studio Believe In Ideas</h4>
            <h1 class="text-white d-none d-md-block">Creative Design</h1>
            <button class="btn btn-outline-light">Get started</button>
        </div>
    </div>

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

    <!-- our projects -->
    <div class="container py-5">
        <p class="text-muted">Our Projects</p>
        <div class="d-flex justify-content-between">
            <h1>Our Latest Projects</h1>
            <div>
                <a class="btn btn-outline-info" href="project.php">Browser Projects <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="row projects g-4">
            <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-1.jpg" alt="">
            </div>
            <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-2.jpg" alt="">
            </div>
            <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-3.jpg" alt="">
            </div>
            <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-4.jpg" alt="">
            </div>
            <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-5.jpg" alt="">
            </div>
            <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-6.jpg" alt="">
            </div>
            <!-- <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-7.jpg" alt="">
            </div>
            <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-8.jpg" alt="">
            </div> -->
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

    <!-- footer -->
    <?php include "layouts/footer.php"; ?>

    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
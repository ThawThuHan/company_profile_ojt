<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        .categories>span {
            display: inline-block;
            padding: 8px;
            border-radius: 8px;
            color: white;
            background-color: grey;
        }
    </style>
</head>

<body>
    <?php include "layouts/header.php"; ?>

    <?php
    $page = "Projects";
    include "layouts/page_banner.php"
    ?>

    <!-- our projects -->
    <div class="container py-5">
        <div class="categories">
            <span class="bg-info">All</span>
            <span>Website</span>
            <span>App</span>
            <span>Desktop</span>
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
            <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-7.jpg" alt="">
            </div>
            <div class="col-6 col-md-4">
                <img src="assets/images/portfolio/work-8.jpg" alt="">
            </div>
        </div>
    </div>


    <?php include "layouts/footer.php"; ?>

    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
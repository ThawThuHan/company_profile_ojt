<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        .form-control {
            border: none;
            background-color: gainsboro;
        }
    </style>
</head>

<body>
    <?php include "layouts/header.php"; ?>

    <?php
    $page = "Contact";
    include "layouts/page_banner.php"
    ?>

    <div class="container col-md-8 text-center py-5">
        <h1>Stay in Touch</h1>
        <p>Just say hello or drop us a line. You can manualy send us email on <span class="text-info">example@emaple.com</span></p>
        <form class="text-start pt-4" action="">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="name" class="form-label text-muted">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name...">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="name" class="form-label text-muted">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email...">
                </div>
            </div>
            <div class="mb-2">
                <label for="subject" class="form-label text-muted">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Subject...">
            </div>
            <div class="mb-2">
                <label for="message" class="form-label text-muted">Message</label>
                <textarea type="text" class="form-control" id="message" rows="7" placeholder="Enter your message...">
                </textarea>
            </div>
            <button class="btn btn-info text-white">
                Submit
            </button>
        </form>
    </div>

    <?php include "layouts/footer.php"; ?>

    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
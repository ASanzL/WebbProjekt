<!doctype html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Campus Mölndal</title>
</head>
<body>
<?php require_once 'menu.php'; ?>
<main>
    <section>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="img/prog-kopia.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="img/prog2-kopia.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
        <section class="gridContainer">
            <?php include_once('displaySmall.php'); ?>
        </section>
    </section>
</main>
<?php require_once 'footer.php'; ?>
<script src="js/javascript.js"></script>
</body>
</html>
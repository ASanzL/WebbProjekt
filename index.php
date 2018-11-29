<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Skapa nytt inlägg</h1>

<form action="info.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="isnew" id="isnew" value="1">

    <label>Författare:</label>
    <p><input type="text" name="txtForfattare" placeholder="Författare:"></p>

    <label>Titel:</label>
    <p><input type="text" name="txtTitel" placeholder="Titel:"></p>

    <label>Text:</label>
    <p><textarea type="text" name="txtText" placeholder="Skriv in text"></textarea></p>

    upload file:
    <input type="file" name="myFile" id="fileToUpload">
    <input type="submit" name="submit" value="upload file">
</form>

</body>
</html> -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campus Mölndal</title>
</head>
<body>
<header>
    <nav>
        <div class="menu-icon">
            <i class="fa fa-bars fa-2x">
                Meny
            </i>
        </div>
        <div class="logo">
            <a href="index.html"><img src="img/campuslogo.png"></a>
        </div>
        <div id="menu-items">
            <ul>
                <li><a href="#">Studie och Yrkesvägledning</a></li>
                <li><a href="allUtbildningar.html">Utbildningar</a></li>
                <li><a href="#">Dina studier</a></li>
                <li><a href="foretagochorg.html">Företag och organisationer</a></li>
                <li><a href="contact.html">Kontakta oss</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <section>
        <div class="slideshow-container">
            <a href="#">
                <div class="mySlides fade">
                    <img src="img/banner.png" style="width:100%">
                </div>
            </a>
            <a href="#">
                <div class="mySlides fade">
                    <img src="img/img_snow_wide.jpg" style="width:100%">
                </div>
            </a>
            <a href="#">
                <div class="mySlides fade">
                    <img src="img/img_lights_wide.jpg" style="width:100%">
                </div>
            </a>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <section class="gridContainer">
            <?php echo include_once('displaySmall.php'); ?>
        </section>
    </section>
</main>
<footer>
    <section class="footerGrid">
        <article class="footerItem">
            <h2>Campus Mölndal</h2>
            <p>Vägledningsexpedition</p>
            <p>- för dig som vill studera</p>
            <p>031-315 10 14</p>
            <p>vagledning.campus@molndal.se</p>
        </article>
        <article class="footerItem">
            <h2>Campus Mölndal</h2>
            <p>Skolexpedition</p>
            <p>- för dig som är elev</p>
            <p>031-315 31 30</p>
            <p>skolexp.campus@molndal.se</p>
        </article>
        <article class="footerItem">
            <h2>Snabblänkar</h2>
            <a href="#">Ansökan</a>
            <a href="contact.html">Kontakt</a>
            <a href="#">Itslearning</a>
            <a href="#">Synpunkter</a>
            <a href="#">Felanmälan</a>
        </article>
        <article class="footerItemSocial">
            <h2>Social media</h2>
            <a href="https://www.facebook.com"><img src="img/facebook.png"></a>
        </article>
    </section>
    <p>Copyright © Campus Mölndal</p>
</footer>
<script src="js/javascript.js"></script>
</body>
</html>
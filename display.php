<?php
/*
  * Visar alla inlägg
*/

// Inkluderar filerna för databaskopplingen och funktioner
require_once("Includes/conn.mysql.php");
require_once('Includes/functions.php');

$connection = dbConnect();

$showAll = showAll($connection);



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campus Mölndals blogg</title>
    <?php
    $blogCssFile = "css/blog_style.css";
    echo "<link rel='stylesheet' href='" . $blogCssFile . "'>";
    $cssFile = "css/style.css";
    echo "<link rel='stylesheet' href='" . $cssFile . "'>";
    ?>
    <link href="css/blog_style.css?<?=filemtime("blog_style.css")?>" rel="stylesheet" type="text/css" />
    <link href="css/style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />
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
                <img src="img/campuslogo.png">
            </div>
            <div id="menu-items">
                <ul>
                    <li><a href="#">Om bloggen</a></li>
                    <li><a href="#">Vi som skriver</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <h1>Campus Mölndals blogg</h1>
    <ul>
        <?php
        // Loopar genom arrayen som innehåller alla inlägg i tabellen
        while($row = mysqli_fetch_array($showAll)){
            ?>
            <h3><?php echo $row['postTitle'];?></h3>
            <p><?php echo "Författare " . $row['postWriter'];?> </p>
            <p><?php echo "Postat " . $row['postDate'];?> </p>
            <p><?php echo $row['postText'];?></p>
            <img src="./img/upload/<?php echo $row['image'];?>">
            <?php
        }
        ?>
    </ul>
    <footer>  <section class="footerGrid">
            <article class="footerItem">
                <h2>Rubrik</h2>
                <a href="#">Text</a>
                <a href="#">Text</a>
                <a href="#">Text</a>
                <a href="#">Text</a>
            </article>
            <article class="footerItem">
                <h2>Rubrik</h2>
                <a href="#">Text</a>
                <a href="#">Text</a>
                <a href="#">Text</a>
                <a href="#">Text</a>
            </article>
            <article class="footerItem">
                <h2>Rubrik</h2>
                <a href="#">Text</a>
                <a href="#">Text</a>
                <a href="#">Text</a>
                <a href="#">Text</a>
            </article>
            <article class="footerItemSocial">
                <h2>Social media</h2>
                <a href="https://www.facebook.com"><img src="img/facebook.png"></a>
                <a href="https://www.twitter.com"><img src="img/twitter.png"></a>
                <a href="https://www.instagram.com"><img src="img/instagram.png"></a>
                <a href="https://www.linkedin.com"><img src="img/linkedin.png"></a>
            </article>
        </section>
        <p>Copyright © Campus Mölndal</p></footer>
<?php
// Stänger databaskopplingen
dbDisconnect($connection);
?>
</body>
</html>
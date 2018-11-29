<?php
require_once ('Includes/conn.mysql.php');
require_once ('Includes/functions.php');

$connection = dbConnect();
$blogPosts = getAmountPosts($connection, 6);
while($row = mysqli_fetch_array($blogPosts)){
    ?>
    <article class="gridItem">
        <img src="img/Campus-Molndal.jpg">
        <h3><?php echo utf8_encode($row['postTitle']);?></h3>
        <!-- TODO: Gör ny css klass för skribent -->
        <p><?php echo "Författare " . utf8_encode($row['postWriter']);?></p>
        <p><?php echo utf8_encode($row['postText']);?></p>
        </p>
    </article>
<?php
}
?>
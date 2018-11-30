<?php
require_once ('Includes/conn.mysql.php');
require_once ('Includes/functions.php');

$connection = dbConnect();
$blogPosts = getAmountPosts($connection, 6);
while($row = mysqli_fetch_array($blogPosts)){
    ?>
    <a href="#" class="blogDisplaySmall">
        <article class="gridItem">
            <img src="img/upload/<?php echo $row['image']; ?>">
            <h3><?php echo $row['postTitle'];?></h3>
            <p><?php echo $row['postText'];?></p>
        </article>
    </a>
<?php
}
?>
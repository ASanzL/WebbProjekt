<?php
/*
 * Lägger till nytt inlägg
*/
// Inkluderar filerna för databaskopplingen och funktioner
require_once("Includes/conn.mysql.php");

$connection = dbConnect();

$target_dir = "./img/upload/";
$target_file = $target_dir . basename($_FILES['myFile']['name']);

move_uploaded_file($_FILES['myFile']['tmp_name'],$target_file);

$date = date("Y-m-d H:i:s");
$forfattare = $_POST['txtForfattare'];
$titel = $_POST['txtTitel'];
$text = $_POST['txtText'];
$img = $_FILES['myFile']['name'];

echo $query = "INSERT INTO post
			(postWriter,postTitle,postDate, postText, image)
			VALUES('$forfattare','$titel','$date', '$text', '$img')";

$result = mysqli_query($connection,$query) or die("Query failed: $query");

$insId = mysqli_insert_id($connection);

header("Location: index.php");


?>
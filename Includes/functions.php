<?php

function savePost($connection){
    $date = date("Y-m-d H:i:s");
    // mysqli_real_escape_string motverkar SQLInjection
    $forfattare = mysqli_real_escape_string($connection,$_POST['txtForfattare']);
    $titel = mysqli_real_escape_string($connection,$_POST['txtTitel']);
    $text = mysqli_real_escape_string($connection,$_POST['txtText']);
    $img = mysqli_real_escape_string($connection,$_POST['myFile']);


    $query = "INSERT INTO post
			(postWriter,postTitle,postDate, postText, image)
			VALUES('$forfattare','$titel','$date', '$text', '$img')";

    $result = mysqli_query($connection,$query) or die("Query failed: $query");

    $insId = mysqli_insert_id($connection);

    return $insId;
}

function getAllPosts($conn){
    // Visar alla inlägg i tabellen
    $query = "SELECT * FROM post ORDER BY postDate DESC";

    $result = mysqli_query($conn,$query) or die("Query failed $query");

    return $result;
}

function getAmountPosts($conn, $amount){
    // Visar alla inlägg i tabellen
    $query = "SELECT * FROM post ORDER BY postDate DESC LIMIT $amount";

    $result = mysqli_query($conn,$query) or die("Query failed $query");

    return $result;
}
?>
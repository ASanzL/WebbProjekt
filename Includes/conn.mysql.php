<?php
/*
 * Skapar databaskopplingen
 */

function dbConnect(){
    $connection = mysqli_connect("localhost", "root", "", "CampusMolndalBlogDB")
    or die("Could not connect");
    mysqli_select_db($connection, "CampusMolndalBlogDB") or die("Could not select database");
    mysqli_set_charset($connection,"utf8");
    return $connection;
}

/*
 * Stänger databaskopplingen
 */

function dbDisconnect($connection){
    mysqli_close($connection);
}
?>
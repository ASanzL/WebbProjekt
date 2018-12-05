<!doctype html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campus Mölndal</title>
</head>
<?php include_once 'menu.php' ?>
<div id="createPost">
    <h1>Skapa nytt inlägg</h1>

    <fieldset>
        <legend>Skapa inlägg</legend>
    <form action="info.php" method="post" enctype="multipart/form-data" id="createPost" autocomplete="off">

        <input type="hidden" name="isnew" id="isnew" value="1">

        <div class="inputArea">
            <label>Författare:</label>
            <p><input type="text" name="txtForfattare" placeholder="Författare"></p>
        </div>

        <div class="inputArea">
            <label>Titel:</label>
            <p><input type="text" name="txtTitel" placeholder="Titel"></p>
        </div>

        <div class="inputArea">
            <label>Text:</label>
            <p><textarea type="text" name="txtText" placeholder="Skriv in text"></textarea></p>
        </div>

        <div class="inputArea">
            <label for="fileToUpload">Bild:</label>
            <p><input type="file" name="myFile" id="fileToUpload"></p>
        </div>
        <p><input type="submit" name="submit" value="Skapa inlägg"></p>
    </form>
    </fieldset>
</div>
<?php include_once 'footer.php' ?>
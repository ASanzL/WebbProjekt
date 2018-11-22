<!doctype html>
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
</html>
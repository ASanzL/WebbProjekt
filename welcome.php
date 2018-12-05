<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

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
<body>
<?php require_once 'menu.php'; ?>
<main>

    <div class="page-header">
        <h1>Hej, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Välkommen till Campus Mölndal.</h1>
        <a href="createPost.php">Lägg upp nyheter på startsidan</a>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Återställ ditt lösenord</a>
        <a href="logout.php" class="btn btn-danger">Logga ut</a>
    </p>

</main>
<?php require_once 'footer.php'; ?>
<script src="js/javascript.js"></script>
</body>
</html>
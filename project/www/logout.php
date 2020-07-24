<!DOCTYPE html>
<?php   
// Sessionshantering
session_start();
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Projekt 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
<?php include("navbar.php"); ?>

<section>
<?php
// Om du är inloggad
if(isset($_SESSION['username'])) {
    session_unset(); // Frigör sessionsvariabler
    session_destroy(); // Förstör även sparade sessionsIDn
    header("location:logout.php"); // Uppdatera navbarens sessionstillstånd
}
// Om du är utloggad (efter en refresh)
else {
    print("<section>Du är utloggad.<br>");
    print("Vill du <a href='login.php'>logga in?</a></section>");
}
?>
</section>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>SomeCompany inc.</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.1141335507.1719068400&semt=sph">
</head>
<?php include "header.html"?>
<?php include "call.html"?>
<h2>O nas</h2>
<?php include "about_us.html";?>
<h2>Opinie</h2>
<div id="opinion">
<?php include "../classes/Opinions.php";
$opinions=new Opinions();
$opinions->specialopinions("pl");
?>
    <a href="opinion.php">Wysyłanie i Więcej Opinii</a>
</div>
<h2>Nasze Produkty</h2>
<?php include "../classes/Products.php";
$prod=new Products("pl");
$prod->display();
?>
<h2>Kontakt</h2>
<?php include "contact.php" ?>
<?php include "footer.html";?>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SomeCompany inc.</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.1141335507.1719068400&semt=sph">
</head>
<?php include "header.html";?>
<?php include "call.html";?>
<h2>About Us</h2>
<?php include "about_us.html";?>
<h2>Opinions</h2>
<div id="opinion">
<?php include "../classes/Opinions.php";
$opinions=new Opinions();
$opinions->specialopinions("en");
?>
<a href="opinion.php">For Sending and more Opinions</a>
</div>
<h2>Our Products</h2>
<?php include "../classes/Products.php";
$prod=new Products("en");
$prod->display("en");
?>
<h2>Contact</h2>
<?php include "contact.html";?>
<?php include "footer.html";?>
</html>

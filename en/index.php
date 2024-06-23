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
<?php include "about_us.html";?>
<div id="opinion">
<?php include "../classes/Opinions.php";
$opinions=new Opinions();
$opinions->specialopinions("en");
?>
<?php include "opinion.html";?>
</div>
<?php include "contact.html";?>
</html>

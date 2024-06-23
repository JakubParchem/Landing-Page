<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>SomeCompany inc. Opinie</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.1141335507.1719068400&semt=sph">
</head>
<body class="opinions">
<a href="index.php" class="submit">Powrót do strony Głównej</a>
<h2>Wyślij Opinie</h2>
<form action="../sendopinion.php" method="post">
    <input type="text" hidden="hidden" name="location" value="pl/index.php">
    <input type="text" name="name" placeholder="Imie i Nazwisko" required>
    <textarea name="message" placeholder="Opinia" required></textarea>
    <input type="submit" value="wyślij" class="submit">
</form>
<h2>Więcej Opinii</h2>
<div class="op">
    <?php
    include "../classes/Opinions.php";
    $op=new Opinions();
    $op->showall();
    ?>
</div>
</body>

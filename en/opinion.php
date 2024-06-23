<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SomeCompany inc. Opinions</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.1141335507.1719068400&semt=sph">
</head>
<body class="opinions">
<a href="index.php" class="submit">Return to Main Page</a>
<h2>Send Opinion</h2>
<form action="../sendopinion.php" method="post">
        <input type="text" hidden="hidden" name="location" value="en/opinion.php">
        <input type="text" name="name" placeholder="Name and Last Name" required>
        <textarea name="message" placeholder="Opinion" required></textarea>
        <input type="submit" value="send" class="submit">
 </form>
<h2>More Opinions</h2>
<div class="op">
    <?php
    include "../classes/Opinions.php";
    $op=new Opinions();
    $op->showall();
    ?>
</div>
</body>
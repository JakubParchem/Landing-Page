<div id="contact">
    <form action="../sendmail.php" method="post">
        <input type="text" hidden="hidden" name="location" value="pl/index.php#contact">
        <input type="text" name="name" placeholder="Imie i Nazwisko" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="tel" name="phone" placeholder="Numer Telefonu (opcjonalnie)" value="">
        <input type="text" name="topic" placeholder="Temat" required>
        <textarea name="message" placeholder="Wiadomość" required></textarea>
        <input type="submit" value="Wyślij" class="submit">
    </form>
    <?php
    if(isset($_COOKIE['wrong_input']))
        echo "<p class='error'>".$_COOKIE['wrong_input']."</p>"
    ?>
</div>

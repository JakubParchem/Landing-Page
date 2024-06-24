<div id="contact">
    <form action="../sendmail.php" method="post">
        <input type="text" hidden="hidden" name="location" value="pl/index.php#contact">
        <input type="text" name="name" placeholder="First and Last Name" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="tel" name="phone" placeholder="Phone Number (optional)" value="">
        <input type="text" name="topic" placeholder="Subject" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <input type="submit" value="Send" class="submit">
    </form>
    <?php
    if(isset($_COOKIE['wrong_input']))
        echo "<p class='error'>".$_COOKIE['wrong_input']."</p>"
    ?>
</div>
<?php
$f=fopen("messages.txt","a");
if (preg_match("/^[a-zA-Z-' ]*$/",$_POST['name']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    fwrite($f, $_POST['name'] . ";;\n");
    fwrite($f, $_POST['email'] . ";;\n");
    fwrite($f, $_POST['phone'] . ";;\n");
    fwrite($f, $_POST['topic'] . ";;\n");
    fwrite($f, $_POST['message'] . "~");
    fclose($f);
}else{
    setcookie("wrong_input","wrong input",time()+1);
}
header("location:".$_POST['location']);
?>

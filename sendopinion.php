<?php
$f=fopen("opinions.txt","a");
if(preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {
    fwrite($f, $_POST['name'] . ";;\n");
    fwrite($f, $_POST['message'] . "~");
    fclose($f);
}else{
    setcookie("wrong_input","wrong input",time()+1);
}
header("location:".$_POST['location']);
?>

<?php
$f=fopen("opinions.txt","a");
fwrite($f,$_POST['name']."(<name>)\n");
fwrite($f,$_POST['message']."(<msg>)\n");
fclose($f);
header("location:".$_POST['location']);
?>

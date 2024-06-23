<?php
$f=fopen("messages.txt","a");
fwrite($f,$_POST['name']."(<name>)\n");
fwrite($f,$_POST['topic']."(<Topic>)\n");
fwrite($f,$_POST['message']."(<msg>)\n~");
fclose($f);
header("location:".$_POST['location']);
?>

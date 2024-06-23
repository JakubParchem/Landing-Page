<?php
$f=fopen("opinions.txt","a");
fwrite($f,$_POST['name'].";;\n");
fwrite($f,$_POST['message']."~");
fclose($f);
header("location:".$_POST['location']);
?>

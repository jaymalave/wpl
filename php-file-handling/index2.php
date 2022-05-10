<?php
$file  = fopen("new.txt", "w")  or die("Unable to open file!");
$txt = "This content goes in the new file";

fwrite($file, $txt);

fclose($file);
?>
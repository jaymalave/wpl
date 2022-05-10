<?php
//   readfile("sample.txt");
$file = fopen("sample.txt", "r") or die("Could not open the file");
// echo fread($file, filesize("sample.txt"));
echo fgets($file);
fclose($file);
?>
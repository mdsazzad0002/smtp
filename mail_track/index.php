<?php
header("Content-Type: image/png"); // it will return image 
readfile("Screenshot_2.png");

// dbfunction(); // place your db code
date_default_timezone_set("Asia/Dhaka");
$date =date("d-m-Y h:i:sa");

$myfile = fopen($date.'-'.$_GET['v']."-newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
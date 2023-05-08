<?php
require_once("module/line.php");
//* php index.php "Id:0,Complex:Text:none:Example+Id:1+Text:none:@gmail.com" 15 "," data.mail.com" 15 "," data.csv

$code = $argv[1];
$repeat = $argv[2];
$seperator = $argv[3];
$file = $argv[4];

for($lineId=0 ; $lineId < $repeat; $lineId++){

    $line = new Line($code,$seperator,$lineId);
    $line->pushTo($file);

} 
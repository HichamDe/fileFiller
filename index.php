<?php
require_once("module/line.php");

$configs = parse_ini_file("config.ini");

for($lineId=0 ; $lineId < $configs["repeat"]; $lineId++){

    $line = new Line($configs["code"],$configs["seperator"],$lineId);
    $line->pushTo($configs["file"]);

} 
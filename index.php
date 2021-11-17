<?php

use CitizenNationalIdExtractor\CitizenNationalIdExtractor;
require_once "vendor/autoload.php";



$citizenData = new CitizenNationalIdExtractor(nationalId: "29803050202393");

echo '<pre>';
$result =  $citizenData->getCitizenInfo();
var_dump($result);
echo '<pre>';


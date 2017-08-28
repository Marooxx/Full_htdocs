<?php
require_once 'Exercice4.php';


$bombay = new chat("charlie",4,"roux",'male',"Bombay");
$bombay->getInfos();
echo "<br><br>";

$siberien = new chat("john",4,"gris",'male',"Siberien");
$siberien->getInfos();
echo "<br><br>";

$bengal = new chat("boulette",4,"noire",'femelle','Bengale');
$bengal->getInfos();




?>

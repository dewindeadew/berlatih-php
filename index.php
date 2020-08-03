<?php
require('animal.php');
require('frog.php');
require('ape.php');

$sheep = new animal("shaun");
echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; //2
echo "<br>";
var_dump($sheep->cold_blooded); //false


echo "<br>";
$kodok = new frog ("buduk");
$kodok -> jump();  //"hop hop"
echo $kodok->name;

echo "<br>";
$sungokong = new ape("kera sakti");
$sungokong->yell() // "Auooo"

?>

<?php

// array_push()
$buah = ["apel", "jeruk"];
array_push($buah, "pisang", "mangga");
print_r($buah);
echo "<hr>";

// array_pop()
$buah = ["apel", "jeruk", "pisang"];
$buahTerakhir = array_pop($buah);
echo $buahTerakhir;
echo "<hr>";

// array_shift()
$buah = ["apel", "jeruk", "pisang"];
$buahPertama = array_shift($buah);
echo $buahPertama;
echo "<hr>";

// array_unshift()
$buah = ["apel", "jeruk"];
array_unshift($buah, "pisang", "mangga");
print_r($buah);
echo "<hr>";

// array_merge()
$array1 = ["warna" => "merah", 2, 4];
$array2 = ["a", "b", "warna" => "hijau", "bentuk" => "trapesium", 4];
$result = array_merge($array1, $array2);
print_r($result);
echo "<hr>";


// array_slice()
$buah = ["apel", "jeruk", "pisang", "mangga"];
$subBuah = array_slice($buah, 1, 2);
print_r($subBuah);
echo "<hr>";

// array_splice()
$buah = ["apel", "jeruk", "pisang", "mangga"];
array_splice($buah, 2, 1, "kiwi");
print_r($buah);
echo "<p><strong>by: fika laura";
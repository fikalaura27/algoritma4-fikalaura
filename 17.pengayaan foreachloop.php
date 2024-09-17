<?php
// Foreach Loop dengan Key
$buah = array("apel", "pisang", "ceri");

foreach ($buah as $val) {
    echo $val . "<br>";
}
// Contoh dengan Key
$harga = array("apel" => 10000, "pisang" => 5000, "ceri" => 15000);

foreach ($harga as $kunci => $nilai) {
    echo "Harga dari " . $kunci . " adalah " . $nilai . "<br>";
}
// Penanganan Array Multidimensi
$matriks = array(
   array(1, 2, 3),
   array(4, 5, 6),
   array(7, 8, 9)
);

foreach ($matriks as $baris) {
    foreach ($baris as $nilai) {
        echo $nilai . " ";
    }
    echo "<br>";
}
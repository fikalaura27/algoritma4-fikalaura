<?php 

// Cara Membuat Associative Array
// Menggunakan fungsi array()
$buah = array(
    "apel" => "hijau",
    "strawberry" => "merah",
    "pisang" => "kuning"
);
echo "<hr>";

// Menetapkan langsung
$mobil['Toyota'] = "Corolla";
$mobil['Honda'] = "Civic";
$mobil['Suzuki'] = "Swift";

// Mengakses Data dari Associative Array
echo $buah["apel"]; // Output: hijau
echo "<br>";

echo $mobil['Honda']; // Output: Civic
echo "<hr>";

// Menambahkan dan Mengubah Data
// Menambahkan data baru
$buah["mangga"] = "kuning";

// Mengubah data yang ada
$buah["apel"] = "merah";

// Looping Melalui Associative Array
foreach ($buah as $kunci => $nilai) {
    echo "Kunci: $kunci, Nilai: $nilai<br>";
}
echo "<hr>";

// Menghitung Elemen
echo count($buah); // Menampilkan jumlah elemen di dalam array buah

echo "<hr>";
// Memeriksa Kunci Tertentu
if (array_key_exists("apel", $buah)) {
    echo "Buah apel tersedia!";
}
echo "<hr>";

// Mendapatkan Semua Kunci atau Nilai
// Semua kunci
$kunci = array_keys($buah);

// Semua nilai
$nilai = array_values($buah);

// Mengurutkan Associative Array
// Berdasarkan kunci
ksort($buah);

// Berdasarkan nilai
asort($buah);
echo "<p><strong>by: fika laura";
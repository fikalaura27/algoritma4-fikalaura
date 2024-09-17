<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
echo "<hr>";


// membuat array
$user = [
    "dian",
    "cika",
    "fikalaura"
];

// mengisi array pada indek ke-1 ("muhar")
$user[1] = "fika";

// mencetak isi array
echo "<pre>";
print_r($user);
echo "</pre>";
?>
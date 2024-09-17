<?php 
$films = array(
    array("The Shawshank Redemption", 1994, "Frank Darabont"),
    array("The Godfather", 1972, "Francis Ford Coppola"),
    array("The Dark Knight", 2008, "Christopher Nolan")
);
echo "<br>";

// Mengakses Nilai dalam Array Multidimensi
echo $films[0][0]; // Outputs: The Shawshank Redemption
echo "<br>";

// Menambahkan Nilai ke Dalam Array Multidimensi
$newFilm = array("Inception", 2010, "Christopher Nolan");
$films[] = $newFilm; // Menambahkan di akhir array films
echo "<br>";

// Melakukan Loops Pada Array Multidimensi
foreach ($films as $filmDetails) {
    echo "Judul: " . $filmDetails[0] . "<br>";
    echo "Tahun: " . $filmDetails[1] . "<br>";
    echo "Sutradara: " . $filmDetails[2] . "<br><br>";
}
echo "<br>";

// Fungsi Array dalam Array Multidimensi
$totalFilms = count($films);
echo "Jumlah film: " . $totalFilms; // Menampilkan jumlah film
echo "<br>";
echo "<p><strong>by: fika laura";
<h2>Percobaan Variable</h2>

<?php

$nama = "Bagus firgiawan prakoso";
$semester = 4;
$kelas = "D";
$nim = 16090156;

var_dump($nama); echo "<br>";
var_dump($semester); echo "<br>";
var_dump($kelas); echo "<br>";
var_dump($nim); echo "<br>";

function printNama() {
    global $nama;
    echo "<h3>$nama<h3>";

}
printNama();

function printMatakuliah() {
    $namaMatkul = "web programing";
    echo "<p>$namaMatkul<p>";
}

printMatakuliah();






?>
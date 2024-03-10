<?php
// 1. Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'February', 'Maret'];
$mahasiswa = ['Marchiko', 3.1, false];


// 2. Mencetak isi Array
// Mencetak 1 nilai pada array, menggunakan index
// index dimulai 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// Cetak semua isi array
// var_dump() atau print_r()
// digunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";



// 3. Memanipulasi isi Array
// Menambah isi array
// di Akhir: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// di Awal: array_unshift()
array_unshift($mahasiswa, "233040025");
print_r($mahasiswa);
echo "<hr>";

// Menghapus isi Array
// di belakang: array_pop();
// di depan: array shift();
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);

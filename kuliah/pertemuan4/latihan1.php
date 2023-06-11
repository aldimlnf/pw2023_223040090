<?php 
// ARRAY
// Membuat array
$hari = array('senin', 'selasa', 'rabu',);
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Aldi', 19, false];
$binatang = ['🐕', '🦖', '🐒', '🐄'];

// Mencetak Array
// mencetak 1 elemen di dalam array menggunakan echo

echo $hari[2];
echo "<hr>";
echo "<br>";
//mencetak semua isi array
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myArray);
echo "<hr>";
print_r($binatang);
echo "<hr>";
// manipulasi Array
// Menambahkan elemen menggunakan :
// index : cara yang tidak di sarankan.
$hari[3] = 'kamis';
print_r($hari);
echo "<br>";
// menambahkan elemen di akhir array menggunakan []
$hari[] = "jumat";
$hari[] = "sabtu";
print_r($hari);
echo "<hr>"

// menambah elemen di akhir array menggunakan Array_push
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
echo "<hr>";

// Array Unshift
array_unshift($binatang, '🦖', '🐍');
print_r($binatang);
echo "<hr>";
// menggunakan elemen di belakang arrray dengan array_pop
array_pop($hari);
print_r($hari);
echo "<hr>";

// menggunakan elemen di depan array dengan array_shift
array_shift($bulan);
print_r($bulan);



?>
<?php

// luas lingkaran
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
    $luas = 3.14 * $r * $r;
    return $luas . " cm<sup>2</sup>";
}
echo "Jari-jari = 10 cm.";
echo "</br>";
echo "Luas Lingkaran = " . hitungLuasLingkaran(10);
echo "<hr>";



//keliling lingkaran
echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    $keliling = 2 * 3.14 * $r;
    return $keliling . " cm";
}
echo "Jari-jari = 20 cm.";
echo "<br>";
echo "Keliling lingkaran = " . hitungKelilingLingkaran(20);
echo "<hr>";
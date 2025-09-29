<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$pangkat = $a ** $b;

echo "Hasil tambah: $hasilTambah <br>";
echo "Hasil kurang: $hasilKurang <br>";
echo "Hasil kali: $hasilKali <br>";
echo "Hasil bagi: $hasilBagi <br>";
echo "Hasil pangkat: $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama : $hasilSama <br>";
echo "Hasil tidak sama : $hasilTidakSama <br>";
echo "Hasil lebih kecil : $hasilLebihKecil <br>";
echo "Hasil lebih besar : $hasilLebihBesar <br>";
echo "Hasil lebih kecil sama : $hasilLebihKecilSama <br>";
echo "Hasil lebih besar sama : $hasilLebihBesarSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND : $hasilAnd <br>";
echo "Hasil OR : $hasilOr <br>";
echo "Hasil NOT A : $hasilNotA <br>";
echo "Hasil NOT B : $hasilNotB <br>";


$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Hasil a += b : $a <br>";
echo "Hasil a -= b : $a <br>";
echo "Hasil a *= b : $a <br>";
echo "Hasil a /= b : $a <br>";
echo "Hasil a %= b : $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik : $hasilIdentik <br>";
echo "Hasil tidak identik : $hasilTidakIdentik <br>";

// soal 3.6
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total Kursi di Restoran: " . $totalKursi . "\n";
echo "Kursi yang Terisi: " . $kursiTerisi . "\n";
echo "---------------------------------\n";
echo "Jumlah Kursi Kosong: " . $kursiKosong . "\n";

echo "Persentase Kursi yang masih KOSONG: " . number_format($persentaseKosong, 2) . "%\n";
?>

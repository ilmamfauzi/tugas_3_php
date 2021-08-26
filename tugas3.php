<?php
$jarak = 360;
$kecepatan = 90;

$waktu_jam = $jarak / $kecepatan;
$waktu_menit = $waktu_jam * 60;

echo "Jarak Kota A-Z = $jarak<br>";
echo "Kecepatan motor = $kecepatan<br>";
echo "Waktu tempuh = ?<br>";
echo "Jawaban = $waktu_menit menit";

<?php
$tabungan = 150000;
$bunga_persen = 12.5;

$bunga_rupiah = ($bunga_persen / 100) * $tabungan;
$total_tabungan = $tabungan + $bunga_rupiah;

echo "Tabungan Awal = Rp $tabungan<br>";
echo "Bunga Setahun = $bunga_persen %<br>";
echo "Total Tabungan Setahun = ?<br>";
echo "Jawaban = Rp $total_tabungan";

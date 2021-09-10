<?php
$nilaiA = 85;
$nilaiB = 83;
$hasil = $nilaiA >= "85" && $nilaiB >= "83"? "Lulus": "Tidak Lulus";
echo "Nilai Akademik : <b>$nilaiA</b>";
echo "<br>Nilai Atletik: <b>$nilaiB</b><br>";
echo "Dinyatakan: " .$hasil;
?>
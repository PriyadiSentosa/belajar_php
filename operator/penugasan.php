<?php
$uangUcup = 100000;
$beliMinum = 15000;
$belimakan = 25000;

echo "Uang Ucup = <b>$uangUcup</b><br>";
echo "<hr>";

$beliMakan = 15000;
$uangUcup -= 15000;
echo "Jajan Minum <b>$beliMinum</b><br>";
echo "Sisa Uang Ucup Jajan Minum =<b>$uangUcup</b><br>";
echo "<hr>";

$beliMakan = 25000;
$uangUcup -= 25000;
echo "Jajan Sosis Bakar <b>$beliMakan</b><br>";
echo "Sisa Uang Ucup Jajan Minum =<b>$uangUcup</b><br>";
echo "<hr>";

$sedekah =$uangUcup * 0.1;
echo "Sedekah Ke Musafir 10% dari <b>$uangUcup</b> Yaitu Sebesar
<b>$sedekah</b><br> ";
$uangUcup -= $sedekah;
echo "Sisa Uang ucup <b>$uangUcup</b>";
echo "<hr>";

$nemuUang =$uangUcup * 0.5;
echo "Nemu uang dijalan Sebesar 50% dari sisa uang Ucup<b>$uangUcup</b> Yaitu Sebesar
<b>$nemuUang</b><br> ";
echo "sisa uang ucup sekarang = <b>$nemuUang +  $uangUcup<br>";
$uangUcup += $nemuUang;
echo "Total  Uang ucup <b>$uangUcup</b>";
echo "<hr>";
?>
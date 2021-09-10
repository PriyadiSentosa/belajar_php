<?php
if (isset($_POST['Input'])) { 
 $bil1 = $_POST['angka']; 
 $bil2 = $_POST['bil'];
 $tambah = $bil1 + $bil2;
 $kurang = $bil1 - $bil2;
 $kali = $bil1 * $bil2;
 $bagi = $bil1 / $bil2;
 echo "bil 1 + bil 2 = <b>$tambah</b><br>"; 
 echo "bil 1 - bil 2 = <b>$kurang</b><br>";
 echo "bil 1 * bil 2 = <b>$kali</b><br>";
 echo "bil 1 / bil 2 = <b>$bagi</b><br>";
} 
?>
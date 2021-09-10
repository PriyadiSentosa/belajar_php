<?php
   
   $nilai = "100";
if ( $nilai >= 90 ) {
   $grade = "A";
} else if ( $nilai >= 80 ){
    $grade = "B";
} else if ( $nilai >= 70 ){
    $grade = "C";
} else if ( $nilai >= 60 ){
    $grade = "D";
} else{
    $grade = "E";
} 
    

switch ($grade){
    case 'A' : $ket = "Pertahankan"; break;
    case 'B' : $ket = "Harus Lebih Baik Lagi"; break;
    case 'C' : $ket = "Perbanyak Belajar"; break;
    case 'D' : $ket = "Jangan Keseringan Main"; break;
    case 'E' : $ket = "Kebanyakan bolos"; break;
    default    : $ket = " Tidak Ada Pilihan";
}
echo " Nilai :$nilai <br>";
echo "Grade : $grade <br>";
echo " keterangan :<b>$ket<b>";

?>
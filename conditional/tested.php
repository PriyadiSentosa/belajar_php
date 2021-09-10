<?php

   $member = "Ya";
   $totalBelanja = 350000;
   $disc = 0;
   $totalHarga= 0;

   if($member == "Ya"){
       if($totalBelanja >= 250000){
           $disc = 0.1 * $totalBelanja;
       }else if ($totalBelanja >= 100000){
           $disc =0.05 * $totalBelanja;
       }else{
           if($totalBelanja >= 100000){
               $disc = 0.025 * $totalBelanja;
           }
       }
   }
   $totalHarga = $totalBelanja - $disc;
   echo "Kartu Member : $member<br> ";
   echo "Total Belanja : $totalBelanja<br> ";
   echo "Diskon : $disc<br> ";
   echo "Total yang harus dibayar : $totalHarga<br> ";
   
   
   


  
?>
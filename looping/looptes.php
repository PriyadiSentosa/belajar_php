<?php
 $nil=0;
 for($i = 1; $i <= 10; $i++){
     $nil +=2;
     for($a = 1; $a <= $i; $a++){
         echo $a + $nil." ";
     }
     echo "<br>";
 }
  echo "<hr>";
  for($i = 1; $i <= 5; $i++){
      for($a = 1; $a <= 5; $a++){
          echo $a+$i." ";
      }echo "<br>";
  }
?>
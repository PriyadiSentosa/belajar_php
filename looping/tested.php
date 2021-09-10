<?php
 $i = 2;
 do{
     echo "$i ";
     $i *= 2;
 } while ($i <= 64);

   echo "<br>";
   echo "<hr>";

  for($b = 625; $b >= 5; $b /= 5){
      echo "$b ";
  }
   echo "<br>";
   echo "<hr>";

   $bil = [18,45,29,61,47,34];

   for($i = 0; $i< count($bil);$i++){
       $hasil[$i] = $bil[$i] % 3;
       echo "$bil[$i] % 3 = $hasil[$i]";
       echo "<hr>";
   }

   for($x = 6; $x > 0; $x--){
       for ($a = 6; $a > $x; $a--){
           echo "*";
       }
       echo "<br>";
   }
       echo "<hr>";

       for($i = 0; $i < 5; $i++){
        for ($a = 5; $a > $i; $a--){
            echo "_";
        }
        for($b = 0; $b <= $i; $b++){
            echo " * ";
        }
        echo "<br>";
    }


?>
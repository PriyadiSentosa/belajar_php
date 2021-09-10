<?php
   $arrNilai = array ("ani"=>80, "otim"=>90, "sri"=>75, "Budi"=>85);
   echo "<b>Array Sebelum Pengurutan</b>";
   echo "<pre>";
   print_r($arrNilai);
   echo "<pre>";
   
   ksort($arrNilai);
   reset($arrNilai);
   echo "<b> Array setelah pengurutan dengan ksort";
   echo "<pre>";
   print_r($arrNilai);
   echo"<pre>";

   krsort($arrNilai);
   reset($arrNilai);
   echo "<b> Array setelah pengurutan dengan krsort";
   echo "<pre>";
   print_r($arrNilai);
   echo"<pre>";
?>

<?php
   $email["subjek"] = "Apa kabar?";
   $email["pengirim"] = "dian@petanikode.com";
   $email["isi"] = "Apa kabar? Sudah lama tidak jumpa";

   echo "<pre>";
   print_r($email);
   echo "<pre>";

   echo $email["pengirim"];
?>
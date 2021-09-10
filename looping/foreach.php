<?php

  $books = [
      "Panduan belajar phph untuk pemula",
      "Membangun aplikasi web dengan PHP",
      "Tutorial php dan Mysql",
      "Membuat Chat Bot dengan PHP",
  ];

  echo "<h5>Judul Buku PHP:</h5>";
  echo "<ul>";
  foreach ($books as $buku){
      echo "<li>$buku</li>";
  } echo "</ul>";

?>
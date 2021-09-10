<?php
   
    $user = "Priyadi";
    $email = "Priyadi@gmail.com";
    $pass = 43 ;

     
   echo "Username / Email : <b>$user</b>";
   echo "<br>Password : <b>$pass</b>";
   echo "<br>Cek Login : ". 
   (($user == "aku") || ($pass == "123"));
   



?>
<?php
   $hobi = ["Membaca",
            "Menulis",
            "Ngeblog",
];


$hobi[1] .= " Coding";

unset($hobi[1]);
$hobi[] = "Olahraga";

foreach($hobi as $hobiku){
    echo $hobiku. "<br>";
}
 
?>
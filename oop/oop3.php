<?php

// mengdefinisikan Sebuah Class
class kucing{
    // membuat property atau attributes
    public $warna;

    // constructor adalah method Khusud yang akan
    // dipanggil pertama kali
    public function __construct($warna)
    {
        $this->warna = $warna;
    }

    // membuat method (behavior / prilaku)
    public function bersuara()
    {
        return "meowng... meowng... meowng... ";
    }
}

// membuat objeck (inisiasi object)
$kucing1 = new kucing("Hitam");
echo "Warna kucing 1 : " .$kucing1->warna. "<br>";

$kucing2 = new kucing("Putih");
echo "Warna kucing 2 : " .$kucing2->warna;
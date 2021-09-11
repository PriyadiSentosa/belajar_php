<?php
{
    // mendefinisikan sebuah class
    class kucing{
        // membuat property atau atributes
        public $warna="Coklat";
        public $jumlahKaki=4;
        public $jenisBulu="Panjang";
        public $makananFavorit="Ikan pindang";

        //membuat method(behavior)
        public function bersuara()
        {
            return "meowng... meowng... meowng...";
        }

        public function berburu()
        {
            return "Berburu ikan";
        }
    }

    // membuat object (inisiasi object)
    $kucing1 = new kucing();
    echo "Warna Kucing : " .$kucing1->warna. "<br>";
    echo "Suara Kucing : " .$kucing1->bersuara(). "<hr>";

    $kucing2 = new kucing();
    // set warna kucing
    $kucing2->warna = "Oren";
    echo "Warna Kucing : " .$kucing2->warna. "<br>";
    echo "Suara Kucing : " .$kucing2->bersuara(). "<hr>";
}
?>
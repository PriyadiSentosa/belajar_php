<?php
{
    
    class komputer{
  
        public $dataPemilik="Priyadi";
        public $merk="Asus";
        public $ukuranLayar="18,5 inc";

        public function nyala()
        {
            return " dinyalakan";
        }

        public function mati()
        {
            return " dimatikan";
        }
    }

    $komputer1 = new komputer();
    echo "Data Pemilik : " .$komputer1->dataPemilik. "<br>";
    echo "Merk : " .$komputer1->merk. "<br>";
    echo "Ukuran Layar : " .$komputer1->ukuranLayar. "<br>";
    echo "Komputer : " .$komputer1->nyala(). "<hr>";

    $komputer2 = new komputer();
    
    $komputer2->dataPemilik = "Rifa";
    $komputer2->merk = "Lenovo";
    $komputer2->ukuranLayar = "17,5 inc";

    echo "Data Pemilik : " .$komputer2->dataPemilik. "<br>";
    echo "Merk : " .$komputer2->merk. "<br>";
    echo "Ukuran Layar : " .$komputer2->ukuranLayar. "<br>";
    echo "Komputer : " .$komputer2->mati(). "<hr>";

    $komputer3 = new komputer();
    
    $komputer3->dataPemilik = "Nikita";
    $komputer3->merk = "Dell";
    $komputer3->ukuranLayar = "16,5 inc";

    echo "Data Pemilik : " .$komputer3->dataPemilik. "<br>";
    echo "Merk : " .$komputer3->merk. "<br>";
    echo "Ukuran Layar : " .$komputer3->ukuranLayar. "<br>";
    echo "Komputer : " .$komputer3->nyala(). "<hr>";

    $komputer4 = new komputer();
    
    $komputer4->dataPemilik = "Nisa";
    $komputer4->merk = "HP";
    $komputer4->ukuranLayar = "19,5 inc";

    echo "Data Pemilik : " .$komputer4->dataPemilik. "<br>";
    echo "Merk : " .$komputer4->merk. "<br>";
    echo "Ukuran Layar : " .$komputer4->ukuranLayar. "<br>";
    echo "Komputer : " .$komputer4->mati(). "<hr>";

    $komputer5 = new komputer();
    
    $komputer5->dataPemilik = "Nasywa";
    $komputer5->merk = "Philips";
    $komputer5->ukuranLayar = "15,5 inc";

    echo "Data Pemilik : " .$komputer5->dataPemilik. "<br>";
    echo "Merk : " .$komputer5->merk. "<br>";
    echo "Ukuran Layar : " .$komputer5->ukuranLayar. "<br>";
    echo "Komputer : " .$komputer4->nyala(). "<hr>";


  

}
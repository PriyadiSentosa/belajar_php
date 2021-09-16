<?php
// buat class laptop
class laptop
{
    private $pemilik;
    private $merk;
   
    // construct sebagai pembuat nilai awal
    public function __construct($pemilik,$merk){
        $this->pemilik = $pemilik;
        $this->merk = $merk;
    }
    public function hidupkan_laptop(){
        return "Hidupkan Laptop $this->merk Punya $this->pemilik";
    }
}

// objek dari class lapto(instansiasi)
$laptop_andi = new  laptop("Andi", "Lenovo");

echo $laptop_andi->hidupkan_laptop();
echo "<br  />";

$laptop_anto = new  laptop("Anto", "Acer");

echo $laptop_anto->hidupkan_laptop();
echo "<br  />";
?>
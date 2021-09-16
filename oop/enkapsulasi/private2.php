<?php
// buat class laptop
class laptop
{
    private $pemilik = "Andi";
    private $merk = "Lenovo";

    public function __construct(){
        echo "Ini berasal dari construct laptop";
    }
    public function hidupkan_laptop(){
        return "Hidupkan Laptop $this->merk Punya $this->pemilik";
    }
    
    public function __destruct(){
        echo "Ini berasal dari destruct laptop";
    }
}

// buat objek dari class laptop(instansiasi)
$laptop_andi = new laptop();

echo "<br  />";
echo $laptop_andi->hidupkan_laptop();
echo "<br  />";

// hapus objek $laptop andi
unset($laptop_andi);

echo "<br  />";
echo "Objek telah dihancurkan";
?>
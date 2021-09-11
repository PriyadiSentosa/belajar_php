<?php
{
    class persegi{
        public $sisi = 2;

        public function hitungLuas()
        {
            return pow($this->sisi,2);
        }
        public function keliling()
        {
            return pow($this->sisi,3);
        }
}

    $luas = new persegi();
    echo "Sisi Persegi : " .$luas->sisi. "<br>";
    echo "Luas Persegi : " .$luas->hitungLuas(). "<br>";
    echo "Keliling Persegi : " .$luas->keliling(). "<br>";

}
?>
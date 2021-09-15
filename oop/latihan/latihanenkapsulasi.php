<?php
class Login
{
    public $nama = "Priyadi";
    protected $email = "priyadisentosa825@gmail.com";
    private $sandi = "whatahappenbro";

    public function sign()
    {
        $a = $this->nama;
        $b = $this->email;
        $c = $this->sandi;
        if($a == "priyadisentosa825@gmail.com" && $b == "whatahappenbro"){
            $c = $this->sandi;
        }
        return $c;
    }
    public function signup()
    {
        $a = $this->email;
        $b = $this->nama;
        $c = " $a ";
        return $c;
    }
}
$masuk = new Login();

echo "Nama : $masuk->nama<br>";
echo "Email : ". $masuk->signup(). "<br>";
echo "Kata Sandi : ". $masuk->sign();

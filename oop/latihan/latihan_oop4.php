<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmatika</title>
</head>
<body>
    <fieldset>
        <legend>Aritmatika</legend>
        <form action="" method="post">

        <tr>
            <td>Bil 1</td>
            <td>   : </td>
            <td><input type="number" name="bil1"></td>
        </tr><br>
        <tr>
            <td>Bil 2</td>
            <td>   : </td>
            <td><input type="number" name="bil2"></td>
        </tr><br><br>
        <tr>
            <td><button type="submit" name="input">Input</button></td>
        </tr>
        </form>
    </fieldset>
</body>
</html>

<?php
if(isset($_POST['input'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];


class aritmatika{
    public function __construct($bil1,$bil2){
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
        $pertambahan = $this->bil1 + $this->bil2;
    }
    public function pertambahan()
    {
        return ($this->bil1 + $this->bil2);
    }
    public function pengurangan()
    {
        return ($this->bil1 - $this->bil2);
    }
    public function perkalian()
    {
        return ($this->bil1 * $this->bil2);
    }
    public function pembagian()
    {
        return ($this->bil1 / $this->bil2);
    }
    public function sisaBagi()
    {
        return ($this->bil1 % $this->bil2);
    }
}

$matematika = new aritmatika($bil1,$bil2);

echo "Bilangan 1 = ".$matematika->bil1."<br>";
echo "Bilangan 2 = ".$matematika->bil2."<br>";
echo "<br>";
echo "Penjumlahan : " .$matematika->pertambahan(). "<br>";
echo "Pengurangan : " .$matematika->pengurangan(). "<br>";
echo "Perkalian : " .$matematika->perkalian(). "<br>";
echo "Pembagian : " .$matematika->pembagian(). "<br>";
echo "Sisa Bagi : " .$matematika->sisaBagi();
}
?>
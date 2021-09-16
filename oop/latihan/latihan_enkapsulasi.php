<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <table>
            <form action="" method="post">
            <tr>
                <td>Nama Kucing</td>
                <td> : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kaki Kucing</td>
                <td> : </td>
                <td><input type="number" name="kaki" min="3" max="5">   </td>
            </tr>
            <tr>
                <td>Warna Kucing </td>
                <td> : </td>
                <td><input type="text" name="warna"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
            </form>
        </table>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kaki = $_POST['kaki'];
    $warna = $_POST['warna'];

class kucing
{
    public $nama;
    public $kaki;
    public $warna;

    
    public function kakinya($nama ,$kaki,$warna)
    {
        if ($kaki == 3) {
            echo "Nama Kucing : " . $nama . "<br>";
            echo "Jumlah Kaki : " . $kaki . " cingked Bray<br>";
            echo "Warna Kucing : " . $warna;
        } else if ($kaki == 4) {
            echo "Nama Kucing : " . $nama . "<br>";
            echo "Jumlah Kaki: " . $kaki . " Normal Alus<br>";
            echo "Warna Kucing : " . $warna . " ";
        } else if ($kaki == 5) {
            echo "Nama Kucing : " . $nama . "<br>";
            echo "Jumlah Kaki : " . $kaki . " Siluman Siah Boy<br>";
            echo "Warna Kucing : " . $warna;
        }

    }

}
$kucing = new kucing();

echo $kucing->kakinya($nama ,$kaki,$warna);
}
?>


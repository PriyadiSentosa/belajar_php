<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menghitung lingkaran</title>
</head>
<body>
<fieldset>
    <legend>Lingkaran</legend>
    <form action="" method="post">
    Masukan Jari-Jari : <input type="number" name="jari">
        <input type="submit" name="submit">
    </form>
</fieldset>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    function luasLingkaran($jari, $phi=3.14){
        $jari **= 2;
        $luas = $jari * $phi;
        return $luas;
    }
    function keliling($jari, $phi=3.14) {
        $keliling = ($jari * $phi) * 2;
        return $keliling;
    }
    echo "Jari-Jari : ";
    echo $_POST['jari'];
    echo  "<br>";
    echo "Luas  : ";
    echo luasLingkaran($_POST['jari']);
    echo "<br>";
    echo "keliling  : ";
    echo keliling($_POST['jari']);
    
}

?>
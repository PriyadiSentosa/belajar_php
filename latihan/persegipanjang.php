<html>
    <head>
        <title>Persegi Panjang</title>
    </head> 
    <body>
    <fieldset>
    <legend><h1>Program Luas & Keliling Persegi Panjang</h1></legend>
    <form METHOD = "POST">
        Masukkan Panjang : <input type = "text" name = "panjang"><br>
        Masukkan Lebar : <input type = "text" name = "lebar"><br>
        <input type = "submit" name = "input" value = "input"><br>
</fieldset>
</form>
    </body>
</html>

<?php 
if (isset($_POST['input'])){
    $p = $_POST ['panjang'];
    $l = $_POST ['lebar'];

    $luas = $p * $l;
    $ke1 = 2 * $p * $l;


    echo "Luas Persegi panjang = $luas <br>";
    echo "Keliling Persegi panjang = $ke1 " ;
}
?>
<html>
    <head>
        <title>Persegi</title>
    </head> 
    <body>
    <form METHOD = "POST">
    <fieldset>
    <legend><h1>Program Luas & Keliling Persegi</h1></legend>
        Masukkan Sisi : <input type = "text" name = "sisi"><br>
        Masukkan Panjang : <input type = "text" name = "panjang"><br>
        Masukkan Lebar : <input type = "text" name = "lebar"><br>
        <input type = "submit" name = "input" value = "input"><br>
</fieldset>
</form>
    </body>
</html>

<?php 
if (isset($_POST['input'])){
    $s = $_POST ['sisi'];

    $luas = $s * $s;
    $ke1 = 4 * $s;
    
    
    echo "Luas Persegi = $luas <br>";
    echo "Keliling Persegi = $ke1 " ;
}
?>
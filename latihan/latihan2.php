<html>
    <head>
        <title>Pemrograman Bangun Ruang</title>
    </head> 
    <body>
    <form action = "" METHOD = "POST">
        <fieldset>
            <legend><h1>Pilih Program Dibawah Ini </h1></legend>
        <select name = "pilihan" required>
            <option value = " ">Pilih</option>
            <option value = "1">Program Luas & Keliling Segitiga</option>
            <option value = "2">Program Luas & Keliling Lingkaran</option>
            <option value = "3">Program Luas & Keliling Persegi</option>
            <option value = "4">Program Luas & Keliling Persegi panjang</option>
        </select>

        <button type = "submit" name = "submit">Pilih</button>
        </fieldset>
    </form>
</body>
</html>

<?php
if(isset ($_POST['submit'])){
    $pilihan  = $_POST ["pilihan"];
    if($pilihan == 1 ){
        header ("location: segitiga.php");
    }else if ($pilihan == 2){
        header("location: lingkaran.php");
    }else if ($pilihan == 3){
        header("location: persegi.php");
    }else if ($pilihan == 4){
        header("location: persegipanjang.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas</title>
</head>
<body>
    <fieldset>
        <legend>Universitas</legend>
        <form action="" method="post">
            <tr>
                <td>Nama</td>
                <td>  : </td>
                <td><input type="text" name="nama"></td>
            </tr><br><br>
            <tr>
                <td>Nim </td>
                <td>   : </td>
                <td><input type="number" name="nim"></td>
            </tr><br><br>
            <tr>
                <td>Nilai</td>
                <td>  : </td>
                <td><input type="number" name="nilai"></td>
            </tr><br><br>
            <tr>
                <td><button type="submit" nama="input">Input</button></td>
            </tr>
        </form>
    </fieldset>
</body>
</html>

<?php
if(isset($_POST['input'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai = $_POST['nilai'];


    class mahasiswa
    {
        public function __construct($nama,$nim,$nilai){
            $this->nama = $nama;
            $this->nim = $nim;
            $this->nilai = $nilai;
        }
        public function siswa(){
            return "Nama : $this->nama<br>Nim : $this->nim<br>Nilai : $this->nilai";
        }
    }
     
    $dosen = "Acep";
    class matakuliah 
    {

    }

    
    



}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
<fieldset>
    <legend>Biodata</legend>
    <form action="" method="post">
    <table>
<tr>
<td>
<label for="nama">
    Masukan Nama
 </label>
</td>
<td>
    :
</td>
<td>
    <input type="text" name="nama" required>
</td>
</tr>
<tr>
<td>
    Masukan Jenis Kelamin
</td>
<td>
    :
</td>
<td>
<label for="l">
    <input type="radio" name="jk" value="Laki-Laki" >
    Laki-laki
</label>

<label for="p">
    <input type="radio" name="jk" value="Perempuan" >
    Perempuan
</label>
    </td>
</tr>
<tr>
    <td>
        Tanggal Lahir
    </td>
    <td>
        :
    </td>
    <td>
    <input type="date" name="tgl_Lahir">
</td>
</tr>
<tr>
<td>
    Pilih agama
</td>
<td>
    :
</td>
<td>
    <select name="agama" required>
    <option value="">Pilih</option>
    <option value="Islam">Islam</option>
    <option value="kristen">Kristen</option>
    <option value="katolik">Katolik</option>
    <option value="hindu">Hindu</option>
    <option value="budha">Budha</option>
    <option value="konghucu">Konghucu</option>
</select>
</td>
</tr>

<tr>
    <td>
        Alamat
    </td>
    <td>
        :
    </td>
    <td><textarea name="alamat"  cols="20" rows="1"></textarea></td>
</tr>
<tr>
        <td>Hobi</td>
        <td>
            :
        </td>
        <td>
            <input type="checkbox" name="hobi[]" value="Main Bola">Main Bola
            <input type="checkbox" name="hobi[]" value="Main Game">Main Game
            <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga<br>
            <input type="checkbox" name="hobi[]" value="Silat">Silat
            <input type="checkbox" name="hobi[]" value="Nyanyi">Nyanyi
            <input type="checkbox" name="hobi[]" value="Badminton">Badminton
</td>
</tr>

<tr>
    <td>
        <button type="submit" name="input">submit</button>
    </td>
</tr></form> 
</fieldset>
</table>
</body>
</html><br><br>

<?php

if (isset($_POST['input'])) {
    function biodata($nama, $jk, $tgl_Lahir,$alamat,$agama,$hobi) {

        echo "Nama : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tanggal Lahir : $tgl_Lahir <br>";
        echo "Alamat : $alamat <br>";
        echo "Agama : $agama <br>"; 
        echo "Hobi : ";
        foreach ($hobi as $aku){
            echo "<li>".$aku."</li>";
        }
    }
    echo biodata($_POST['nama'], $_POST['jk'],$_POST['tgl_Lahir'],$_POST['alamat'],$_POST['agama'],$_POST['hobi']);
    
  
}
?>




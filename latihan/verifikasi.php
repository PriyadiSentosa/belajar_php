<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $mobil = $_POST['mobil'];
        $jenis = $_POST['jenis'];
        $merk = $_POST['merk'];
        $noplat = $_POST['noplat'];
        $tanggalpem = $_POST['tanggalpem'];
        $tanggalkem = $_POST['tanggalkem'];
        $penjamin = $_POST['penjamin'];
        $supir = $_POST['supir'];
        
    }
        
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tampilan.php" method="post">
<input type="hidden" name="nama" value=<?php echo "$nama";?> >
<input type="hidden" name="nik" value=<?php echo "$nik";?> >
<input type="hidden" name="jk" value=<?php echo "$jk";?> >
<input type="hidden" name="agama" value=<?php echo "$agama";?> >
<input type="hidden" name="mobil" value=<?php echo "$mobil";?> >
<input type="hidden" name="jenis" value=<?php echo "$jenis";?> >
<input type="hidden" name="merk" value=<?php echo "$merk";?> >
<input type="hidden" name="noplat" value=<?php echo "$noplat";?> >
<input type="hidden" name="tanggalpem" value=<?php echo "$tanggalpem";?> >
<input type="hidden" name="tanggalkem" value=<?php echo "$tanggalkem";?> >
<input type="hidden" name="penjamin" value=<?php echo "$penjamin";?> >
<input type="hidden" name="supir" value=<?php echo "$supir";?> >

<fieldset>
<legend>Verifikasi Pengembalian</legend>
    <table>
    <tr>
            <td>Tanggal Pengembalian</td>
            <td> : </td>
            <td><input  type="date" name="tanggalpengembalian"></td>
            <td><button style= "background-color:aliceblue" type="submit" name="Input">Input</td>
        </tr>
    </table></fieldset>
</form>
</body>
</html>
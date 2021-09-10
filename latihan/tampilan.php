<?php
  if (isset($_POST['Input'])) {
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
        $tanggalpengembalian = $_POST['tanggalpengembalian'];
   
        
       
 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

 $denda = 240000;
        $hari = (strtotime($tanggalkem) - strtotime($tanggalpem)) / 60 / 60 / 24;

        if ($supir == "Ya") {
            $biayasopir = 275000;
        } else{
            $biayasopir = 150000;
        }
    
        $tgl1 = new DateTime("$tanggalkem");
        $tgl2 = new DateTime("$tanggalpengembalian");
        $telat = $tgl2->diff($tgl1);
        
       
        $tgl11 = new DateTime("$tanggalpem");
        $tgl22 = new DateTime("$tanggalkem");
        $lama = $tgl22->diff($tgl11);
        
        
        $totalbiaya = $biayasopir * $lama->d;
        $totaldenda = $denda * $telat->d ;
        $totalpembayaran= $totalbiaya + $totaldenda;

 }
?>
<html>
<style>   
    @media print
    {
    .noprint {display:none;}
    }
</style>
 
<div class="noprint">
<!-- Tombol print / element yang ingin dihilangkan saat print -->
</div>
<fieldset>
    <table border=5 width=100% align=”center”>
        <tr><th colspan="8">Data Diri</th></tr>
        <tr>
            <th>Nama</th>
            <th>Nik</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            
            <th colspan="4">Penjamin</td>
            <tr>
                <td><?php echo "$nama"; ?> </td>
                <td><?php echo "$nik"; ?> </td>
                <td><?php echo "$jk"; ?> </td>
                <td><?php echo "$agama"; ?> </td>
                <td colspan="4"><?php echo "$penjamin"; ?></td>
             
        </tr>
        
        <tr>
            <th colspan="8">Data Rental Mobil</th>
        </tr>
        <tr>
            <th>Nama Mobil</th>
            <th>Jenis Mobil</th>
            <th>Merk Mobil</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
      <th colspan="2">Tanggal Pengembalian</th>
            <th>Menggunakan Supir</th>
        </tr>
        <tr>
            <td><?php echo "$mobil";?></td>
            <td><?php echo "$jenis";?></td>
            <td><?php echo "$merk"; ?></td>`
            <td><?php echo "$tanggalpem"; ?></td>
            <td><?php echo "$tanggalkem";?></td>
<td colspan="2"><?php echo "$tanggalpengembalian"; ?> </td>
            <td><?php echo "$supir" ?></td>
           
        </tr>
        <tr>
            <th colspan="8">Rincian Biaya</th>
        </tr>
        <tr>
            <th colspan="7" align="left">Lama Pinjaman</th>
            <td><?php echo"$lama->d";?> <b>Hari</b></td>
        </tr>
        <tr>
        <?php  
        
        ?>
            <th colspan="7" align="left">Biaya Harian</th>
            <td><?php echo rupiah($biayasopir); ?></td>
        </tr>

        <tr>
            <th colspan="7" align="left">Telat Mengembalikan</th>
            <td><?php echo"$telat->d"?> <b>Hari</b></td>
        </tr>
        <tr>
            <th colspan="7" align="left">Jika Telat Denda Perharinya Sebesar</th>
            <td><?php echo rupiah($denda); ?></td>
        </tr>
        <tr>
            <th colspan="8">Total Biaya</th>
        </tr>

        <tr>
            <th colspan="7" align="left">Total Biaya(Lama Pinjaman * Harian)</th>
            <td><?php echo rupiah($totalbiaya)?>;</td>
        </tr>
        <tr>
        <th colspan="7" align="left">Total Denda(Telat Mengembalikan  * Biaya Denda)</th>
            <td><?php echo rupiah($totaldenda);?></td>
        </tr>
        <tr>
            <th colspan="8">Pembayaran</th>
        </tr>

        <tr>
            <th colspan="7" align="left">Total Pembayaran(Biaya Telat + Total Denda) </th>
            <td><?php echo rupiah($totalpembayaran);?></td>
        </tr>
 
    </table><br>
<html>
    <body>
      <form action = "pembayaran.php" method="POST">
      <input type ="hidden" name="totalpembayaran" value=<?php echo "$totalpembayaran" ?>>

      <br>Pembayaran : <input type="text" name="pembayaran"  required>
      <td><input style="background-color:aliceblue;" type="submit" name="Input"></td>
    <body>
</html>

    <div style=text-align:right>Bandung,<?php echo date('d  M  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    <div class="noprint">
    <button style="background-color:aliceblue;" onClick="window.print();">Print</button>
    </div>
    

</div>

</fieldset>
</html>
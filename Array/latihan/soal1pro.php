<?php
if (isset($_POST['save'])){
    $nama = $_POST ['nama'];
    $asalsekolah = $_POST ['asalsekolah'];
    $indo = $_POST ['indo'];
    $mtk = $_POST ['mtk'];
    $inggris = $_POST ['inggris'];
    $ipa= $_POST ['ipa'];
    $total =0;
    $ket ="";
    
    
}
?>
<html>
    <body>
        <fieldset>
            <legend>data siswa </legend>
            <table border =1>
                <tr> 
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Nilai Indonesia</th>
                    <th>Nilai Matematika</th>
                    <th>Nilai Inggris</th>
                    <th>Nilai IPA</th>
                    <th>Jumlah Nilai</th>
                    <th>Rata-Rata</th>
                    <th>Keterangan</th>
                </tr>

                <?php
                $no =1;
                 for ($i=0; $i< count($nama); $i ++){ ?>
                 <tr>
                     <td ><?php echo $no++ ?> </td>
                     <td><?php echo $nama[$i]; ?> </td>
                     <td><?php echo $asalsekolah[$i];?> </td>
                     <td><?php echo $indo[$i];?> </td>
                     <td><?php echo $mtk[$i];?> </td>
                     <td><?php echo $inggris[$i];?> </td>
                     <td><?php echo $ipa[$i];?> </td>
                     <?php 
                     $total= $indo[$i] + $mtk[$i] + $inggris[$i] + $ipa[$i];
                     $rataRata = $total / 4;
                    if ($total > 340 ){
                        $ket = "Diterima";
                    }
                    else{
                        $ket =" Tidak Diterima";
                    }
                    ?>
                    </td>
                    <td><?php echo $total ; ?></td>
                    <td><?php echo $rataRata ; ?></td>
                    <td><?php echo $ket ; ?></td>
                    
                 </tr>                     
                 <?php
                 }
                 ?>
                 </table>
        </fieldset>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><fieldset>
    <legend align="left"><b>GoFood</b></legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
                <td> Nama Barang </td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>

            <tr>
                <td> Harga Barang </td>
                <td>:</td>
                <td><input type="text" name="barang" required></td>
            </tr>

            <tr>
                <td> Jumlah Pesanan </td>
                <td>:</td>
                <td><input type="text" name="pesan" required></td>
            </tr>

            <tr>
                <td>Sistem Pembayaran</td>
                <td> : </td>
                <td>
            <select name="bayar" required>
                <option value="">Pilih</option>
                <option value="Cash">Cash</option>
                <option value="M-Banking">M-Banking</option>
                <option value="Gopay">Gopay</option>
                <option value="PickUp">PickUp</option>
            </select>
            </td>
            </tr>

            <tr>
            <td><input type="submit" name="input" value="input"></td>
            </tr>

            </form>
        </fieldset>
    </table>
</body>
</html> 
<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $barang = $_POST['barang'];
    $pesan = $_POST['pesan'];
    $bayar = $_POST['bayar'];
    
        
    class GoFood
    {
        public function __construct($bayar)
        {

            $this->bayar = $bayar;
            
        }
    }
    class dis extends GoFood
    {
        public function cepat()
        {
        parent::__construct($this->kecepatan);
    if($this->bayar  >= 250000){
        echo "Maka getDiskon 15%";
     }else if($this->bayar  >= 150000){
        echo "Maka getDiskon 10%";
     }else{
         echo "Tidak Mendapatkan getDiskon";
    }

    }
}
$pembayaran = new dis( $bayar, $nama,$pesan ,$barang );
    ?>
    <br><br><table>

    <?php echo "Nama Barang  : " . $nama . "<br>"; ?>
    <?php echo "Harga Barang  : " . $barang . "<br>"; ?>
    <?php echo "Jumlah Pesanan : " . $pesan . "<br>"; ?>
    <?php echo "Jenis Pembayaran  : " . $bayar. "<br>"; ?>
    <?php echo "Diskon : " . $pembayaran->cepat() . "<br>"; ?>
</table>
<?php
}
?>




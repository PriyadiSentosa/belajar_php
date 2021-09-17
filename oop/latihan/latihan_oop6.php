<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><fieldset>
    <legend align="left"><b>MOTOR</b></legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
                <td> Nama Motor </td>
                <td>:</td>
                <td><input type="text" name="namamotor" required></td>
            </tr>

            <tr>
                <td>Merk</td>
                <td> : </td>
                <td>
            <select name="merk" required>
                <option value="">Pilih</option>
                <option value="Honda">Honda</option>
                <option value="Yamaha">Yamaha</option>
                <option value="Kawasaki">Kawasaki</option>
                <option value="Ducati">Ducati</option>
            </select>
            </td>
            </tr>  

            <tr>
            <tr>
                <td>Jenis Motor</td>
                <td> : </td>
                <td>
            <select name="jenis" required>
                <option value="">Pilih</option>
                <option value="Sport">Sport</option>
                <option value="Trail">Trail</option>
                <option value="Touring">Touring</option>
                <option value="Bekjul">Bekjul</option>
            </select>
            </td>
            </tr>  
            <tr>
                <td> Warna Motor </td>
                <td>:</td>
                <td><input type="text" name="warna" required></td>
            </tr>
             <tr>
            <td> Kecepatan </td>
            <td> : </td>
            <td><input type="number" name="kecepatan" value="kecepatan" max= 1000 min=50 required></td></tr>
        <tr></td>
            <td><input type="submit" name="input" value="input"></td>
            </tr>
        </form></fieldset>
    </table>
</body>
</html>
<?php
if (isset($_POST['input'])) {
    $namamotor = $_POST['namamotor'];
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $warna = $_POST['warna'];
    $kecepatan = $_POST['kecepatan'];

    class motor
    {

        public function __construct($kecepatan)
        {

            $this->kecepatan = $kecepatan;
            
        }

    }
    class jalan extends motor
    {
        public function cepat()
        {
            parent::__construct($this->kecepatan);
            if ($this->kecepatan >= 700 ) {
                $a = " Sangat Cepat ";
            } elseif ($this->kecepatan >= 200 ) {
                $a = "Cepat";
            } elseif ($this->kecepatan >= 100 ) {
                $a = "Lumayan Cepat";
            } else {
                $a = "Tidak Cepat";
            }
            return $a;

        }
        public function grade()
        {
            parent::__construct($this->kecepatan);
            if ($this->kecepatan >= 700  ) {
                $a = "A ";
            } elseif ($this->kecepatan >= 200  ) {
                $a = "B ";
            } elseif ($this->kecepatan >= 100  ) {
                $a = " C";
            } else {
                $a = " D ";
            }
            return $a;

        }
    }

    $motoran = new jalan( $kecepatan, $namamotor, $merk, $jenis, $warna);
    ?>
    <br><br><table>

    <?php echo "Nama Motor  : " . $namamotor . "<br>"; ?>
    <?php echo "Merk Motor  : " . $merk . "<br>"; ?>
    <?php echo "Jenis Motor : " . $jenis . "<br>"; ?>
    <?php echo "Warna Motor  : " . $warna . "<br>"; ?>
    <?php echo "CC Motor  : " . $kecepatan . "<br>"; ?>
    <?php echo "Kecepatan Motor : " . $motoran->cepat() . "<br>"; ?>
    <?php echo "Grade Motor : " . $motoran->grade() . "<br>"; ?>

</table>
<?php
}
?>
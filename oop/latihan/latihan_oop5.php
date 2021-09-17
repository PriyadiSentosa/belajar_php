<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><fieldset>
    <legend align="left"><b>Universitas UI</b></legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
                <td> Nama </td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td> NIM </td>
                <td>:</td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td> Nama Dosen </td>
                <td>:</td>
                <td><input type="text" name="dosen" required></td>
            </tr>
             <tr>
                <td> Mata Kuliah </td>
                <td>:</td>
                <td><input type="text" name="matkul" required></td>
            </tr>
             <tr>
            <td> Nilai </td>
            <td> : </td>
            <td><input type="number" name="nilai" value="nilai" max= 100 min=1 required></td></tr>
        <tr></td>
            <td><input type="submit" name="input" value="input"></td>
            </tr>
        </form></fieldset>
    </table>
</body>
</html>
<?php
if (isset($_POST['input'])) {
    $nilai = $_POST['nilai'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];

    class mahas
    {

        public function __construct($nilai)
        {

            $this->nilai = $nilai;
            
        }

    }
    class tugas extends mahas
    {
        public function keterangan()
        {
            parent::__construct($this->nilai);
            if ($this->nilai >= 85) {
                $a = "Lulus  ";
            } elseif ($this->nilai >= 75) {
                $a = "Lulus";
            } elseif ($this->nilai >= 65) {
                $a = "Perbaiki";
            } else {
                $a = "Tidak Lulus";
            }
            return $a;

        }
        public function grade()
        {
            parent::__construct($this->nilai);
            if ($this->nilai >= 85) {
                $a = "A ";
            } elseif ($this->nilai >= 75) {
                $a = "B ";
            } elseif ($this->nilai >= 65) {
                $a = " C";
            } else {
                $a = " D ";
            }
            return $a;

        }
    }

    $mahasiswa_UI = new tugas($nilai, $nama, $nim, $dosen, $matkul);
    ?>
    <br><br><table>

    <?php echo "Nama : " . $nama . "<br>"; ?>
    <?php echo "NIM : " . $nim . "<br>"; ?>
    <?php echo "Nilai : " . $nilai . "<br>"; ?>
    <?php echo "Nama Dosen : " . $dosen . "<br>"; ?>
    <?php echo "Matakuliah : " . $matkul . "<br>"; ?>
    <?php echo "Grade : " . $mahasiswa_UI->grade() . "<br>"; ?>
    <?php echo "Keterangan : " . $mahasiswa_UI->keterangan() . "<br>"; ?>

</table>
<?php
}
?>
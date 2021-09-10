<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>

<body>
    <form action="verifikasi.php" method="post">
        <fieldset>
            <legend>
                <h1>Rental Mobil</h1>
            </legend>

            <table>
                <tr>
                    <td>
                        <label for="nama">
                            Nama
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="nik">
                            NIK
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="number" name="nik" id="nik" required>
                    </td>
                </tr>
                <tr>
                    <td>
                         Jenis Kelamin
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <label for="l">
                            <input type="radio" name="jk" id="l" value="Laki-laki" >
                            Laki-laki
                        </label>

                        <label for="p">
                            <input type="radio" name="jk" id="p" value="Perempuan" >
                            Perempuan
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                            Agama
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
                        <label for="mobil">
                           Nama Mobil
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="mobil" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Jenis Mobil
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="jenis" required>
                            <option value="">Jenis Mobil</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Suv">Suv</option>
                            <option value="Jeep">Jeep</option>
                            <option value="Sport">Sport</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        Merk Mobil
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="merk" required>
                            <option value="">Merk Mobil</option>
                            <option value="Honda">Honda</option>
                            <option value="MercedesBenz">MercedesBenz</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Suzuki">Suzuki</option>
                        </select>
                    </td>
                </tr>

                 <tr>
                    <td>
                        <label for="noplat">
                           Nomer Plat 
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="noplat" required>
                    </td>
                </tr>
   
                 <tr>
                    <td>
                        <label for="tanggalpem">
                           Tanggal Peminjam 
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="date" name="tanggalpem" required>
                    </td>
                </tr>

                 <tr>
                    <td>
                        <label for="tanggalkem">
                           Tanggal Kembali 
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="date" name="tanggalkem" required>
                    </td>
                </tr>

            <tr>
                    <td>
                        Penjamin
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="penjamin" required>
                            <option value="">Jaminan</option>
                            <option value="FcKTP">FC KTP</option>
                            <option value="FcSIM">FC SIM</option>
                            <option value="FcKK">FC KK</option>
                        </select>
                    </td>
                </tr>

                 <tr>
                    <td>
                        Supir
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="supir" required>
                            <option value="">Menggunakan Supir</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </td>
                </tr>


            </table>

            <button style="background-color:aliceblue;" type="submit" name="submit">Submit</button>
            <button style = "background-color:aliceblue;" type="reset" name="reset">Reset</button>

        </fieldset>

    </form>


</body>

</html>








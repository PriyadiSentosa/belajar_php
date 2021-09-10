<?php
    $data = [
        ["dosen" => "Aceng Fikri", "siswa" => [
            [ "nama" => "Priyadi Sentosa",
            "MataKuliah" => 
            
            [["MataKuliah" => "Matematika"],["MataKuliah" => "IPA"],["MataKuliah" => "IPS"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "Silat"]]],

            [ "nama" => "Dandi Taufik Dayat",
            "MataKuliah" => 
            
            [["MataKuliah" => "PPKN"],["MataKuliah" => "Sejarah"],["MataKuliah" => "KWU"]],
            "Hobi" => 
            [["Hobi" => "Bermain"],["Hobi" => "Badminton"]]],

            [ "nama" => "Sendy Lenyay",
            "MataKuliah" => 
            
            [["MataKuliah" => "RPL"],["MataKuliah" => "Manajemen"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Futsal"],["Hobi" => "Basket"]]],

            [ "nama" => "Soni Stunt",
            "MataKuliah" => 
            
            [["MataKuliah" => "Fisika"],["MataKuliah" => "Kimia"],["MataKuliah" => "Biologi"]],
            "Hobi" => 
            [["Hobi" => "Mancing"],["Hobi" => "Main Game"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "siswa" => [
            [ "nama" => "dadang",
            "MataKuliah" => 
            
            [["MataKuliah" => "Matematika"],["MataKuliah" => "IPA"],["MataKuliah" => "IPS"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "Bermain musik"]]],

            [ "nama" => "Ujang",
            "MataKuliah" => 
            
            [["MataKuliah" => "PPKN"],["MataKuliah" => "Sejarah"],["MataKuliah" => "KWU"]],
            "Hobi" => [["Hobi" => "Traveling"],["Hobi" => "Bermain"]]],

            [ "nama" => "Udin",
            "MataKuliah" => 
            
            [["MataKuliah" => "RPL"],["MataKuliah" => "Manajemen"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Futsal"],["Hobi" => "Berenang"]]],

            [ "nama" => "Ijul",
            "MataKuliah" => 
            
            [["MataKuliah" => "Fisika"],["MataKuliah" => "Kimia"],["MataKuliah" => "Biologi"]],
            "Hobi" => 
            [["Hobi" => "Mancing"],["Hobi" => "Main Game"]]],
        ]
        ],
    ];
    $no = 1;
    foreach($data as $key => $val) {
        echo "Nama Wali Dosen : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['siswa'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['MataKuliah'] as $sub) {
                echo "<li>". $sub['MataKuliah']. "</li>";
            }
            echo "</ol>";
        } 
            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($menu['Hobi'] as $hobi) {
            echo "<li>". $hobi['Hobi']. "</li>";
        }
        echo "</ol>";
        echo "</ul>";
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
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['siswa'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<br>". $hobi['Hobi']. "<br>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>
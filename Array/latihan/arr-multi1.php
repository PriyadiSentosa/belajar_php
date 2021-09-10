<?php
    $data = [
        ["dosen" => "Aceng Fikri", "siswa" => [
            [ "nama" => "Ahmad",
            "MataKuliah" => 
            
            [["MataKuliah" => "Fisika"],["MataKuliah" => "Kimia"],["MataKuliah" => "Biologi"]],
            "Hobi" => [["Hobi" => "Mancing"],["Hobi" => "Main Game"]]],

            [ "nama" => "Acep",
            "MataKuliah" => 
            
            [["MataKuliah" => "Fisika"],["MataKuliah" => "Kimia"],["MataKuliah" => "Biologi"]],
            "Hobi" => 
            [["Hobi" => "Mancing"],["Hobi" => "Main Game"]]],

            [ "nama" => "Ucup",
            "MataKuliah" => 
            
            [["MataKuliah" => "Fisika"],["MataKuliah" => "Kimia"],["MataKuliah" => "Biologi"]],
            "Hobi" => [["Hobi" => "Mancing"],["Hobi" => "Main Game"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "siswa" => [
            [ "nama" => "Abdul",
            "MataKuliah" => 
            
            [["MataKuliah" => "Fisika"],["MataKuliah" => "Kimia"],["MataKuliah" => "Biologi"]],
            "Hobi" => [["Hobi" => "Mancing"],["Hobi" => "Main Game"]]],

            [ "nama" => "Jajang",
            "MataKuliah" => 
            
            [["MataKuliah" => "Fisika"],["MataKuliah" => "Kimia"],["MataKuliah" => "Biologi"]],
            "Hobi" => 
            [["Hobi" => "Mancing"],["Hobi" => "Main Game"]]],

            [ "nama" => "Dadang",
            "MataKuliah" => 
            
            [["MataKuliah" => "Fisika"],["MataKuliah" => "Kimia"],["MataKuliah" => "Biologi"]],
            "Hobi" => [["Hobi" => "Mancing"],["Hobi" => "Main Game"]]],

            
        ]
        ],
    ];
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
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




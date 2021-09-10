<?php
    $dataMhs = [
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
    $data = json_encode($dataMhs);

    echo json_encode($data);
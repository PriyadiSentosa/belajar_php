<?php
$dataMhs= '[
    {"nama":"Mahmud","Domisili":"Bandung"},
    {"nama":"Udin","Domisili":"Tasik"},
    {"nama":"Ecep","Domisili":"Majalaya"},
    {"nama":"Entis","Domisili":"Ciamis"},
]';

$data = json_encode($dataMhs);

echo json_encode($data);

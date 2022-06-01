<?php

// $mahasiswa = [
//     [

//         "nama" => "mahasiswa 1",
//         "nim" => 123555,
//         "email" => "Sandypramuhdiana96@gmail.com"
//     ],

//     [

//         "nama" => "mahasiswa 2",
//         "nim" => 123555,
//         "email" => "Sandypramuhdiana96@gmail.com"
//     ]

// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM karyawan');
$db->execute();

$karyawan = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($karyawan);
echo $data;

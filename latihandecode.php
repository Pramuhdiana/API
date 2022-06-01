<?php
//mengubah json menjadi array assosiatif
$data = file_get_contents('json/coba.json');

$mahasiswa = json_decode($data, true);

var_dump($mahasiswa);

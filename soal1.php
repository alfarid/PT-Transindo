<?php

$File = "rs.json";
// Mendapatkan File Json
$DataAPI = File_get_contents($File);
// Mendecode Prov.Json
$Data = Json_decode($DataAPI, True);

echo "Soal 1A :<br>";
echo "Nama Ruangan : ";
echo $Data[1]["namaruangan"];

echo "<br>";

echo "Jumlah Ruangan : ";
echo count($Data);

echo "<hr>";

echo "Soal 1B :<br>";
echo "Nama Dokter : ";
echo $Data[1]["namadokter"];

?>

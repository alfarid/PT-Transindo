<?php

$File = "rs.json";
// Mendapatkan File Json
$DataAPI = File_get_contents($File);
// Mendecode Prov.Json
$Data = Json_decode($DataAPI, True);

$Data[] = "a516faf0-1980-11ed-85c9-5d3d250998";
$Data[] = "a516faf0-1980-11ed-85c9-5d3d253352";
$Data[] = "a516faf0-1980-11ed-85c9-5d3d235256";


print_r($Data)
?>

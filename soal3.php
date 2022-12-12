<?php

$File = "rs.json";
// Mendapatkan File Json
$DataAPI = File_get_contents($File);
// Mendecode Prov.Json
$Data = Json_decode($DataAPI, True);


foreach($Data as $post){
	echo "Nama Pasien : ";
	echo $post['namapasien'];
	echo "<br>";
	echo "Tanggal Registrasi : ";
	echo $post['tglregistrasi'];
	echo "<hr>";
}
?>

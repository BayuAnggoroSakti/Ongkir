<?php

// Include library ongkir
require("lib/ongkir.php");

// Create objek ongkir(dari, ke, berat)
if (isset($_GET['submit'])) {
	$dari = $_GET['dari'];
	$ke = $_GET['ke'];
	$berat = $_GET['berat'];
	$ongkir = new ongkir($dari, $ke, $berat);
	echo $ongkir->tiki();
}
else
{
	$ongkir = new ongkir('bandung', 'surabaya', 5);
	echo $ongkir->tiki();
}
	header("location : ","coba.php");



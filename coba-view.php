<?php
session_start();
$nama = $_SESSION['nama'];
$nomorhp = $_SESSION['nomorhp'];

echo "namaku ".$nama;
echo " no hp ku".$nomorhp;

?>

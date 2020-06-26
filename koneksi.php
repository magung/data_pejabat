<?php
//variabel koneksi
$koneksi = mysqli_connect("localhost","root","","pejabat");

if(!$koneksi){
	echo "Koneksi Database Gagal...!!!";
}
?>

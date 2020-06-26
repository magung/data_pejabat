<?php
	include "koneksi.php";
	$hapus = mysqli_query($koneksi, "DELETE FROM pejabat WHERE id='$_GET[id]'");
	
	if($hapus){
		   header('location:index.php');
    
	}
?>
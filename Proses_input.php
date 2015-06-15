<?php 
	include "config/database.php";
	
	$namaBarang = $_POST['name'];
	
	$query = mysql_query("INSERT INTO tb_barang (nama_barang) VALUES('$namaBarang')");
	
	if($query){
		echo"data Masuk <a href='index.php'>Kembali</a>";
	}else {
		echo"GAGAL <a href='index.php'>Kembali</a>";
	}
?>
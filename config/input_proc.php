<?php 
	include_once "database.php";
	
	$namaBarang = $_POST['name'];
	
	$query = mysql_query("INSERT INTO tb_barang VALUES ('','$namaBarang')");
?>
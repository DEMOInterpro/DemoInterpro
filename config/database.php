<?php 

		$host="localhost";
		$user = "root";
		$pass = "";
		$db ="sekolah";
		
		mysql_connect($host,$user,$pass)or die("Koneksi GAGAL");
		mysql_select_db($db) or die ("SALAHHHHHH!!");
?>
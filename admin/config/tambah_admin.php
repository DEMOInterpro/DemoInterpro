<?php 
	include("../../config/database.php");
	
	if($_POST['daftar']){
		$nama = $_POST['nama'];
		$usernme = $_POST['username'];
		$password = md5($_POST['password']);
		$password2 = md5($_POST['password2']);
		
		if($nama && $usernme && $password && $password2){
			if($password==$password2){
				$cek = mysql_query("SELECT * FROM tb_admin WHERE username = '$usernme'");
				$num = mysql_num_rows($cek);
				if($num==0){
					$insert = mysql_query("INSERT INTO tb_admin (nama,username,pass) VALUES ('$nama','$usernme','$password')");
					if($insert){
						echo"<p>Selamat, admin berhasil ditambahkan</p>";
					}
					else {
						echo"GAGAL";
					}
				}
				else {
					echo"<p>Username Sudah ada</p>";
				}
			}
			else {
				echo"<p>Password Tidak Sama</p>";
			}
		}
		else {
			echo "<p>Semua wajib anda isi</p>";	
		}
	}
?>
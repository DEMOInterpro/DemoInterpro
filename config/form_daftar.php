<?php 
	include "../class/classCrud.php";
	
	$ex = new crudQu;
	$ex->getDatabase();
	
	$nama = $_POST['nama'];
	$tempatLahir = $_POST['tempatLahir'];
	$date = $_POST['date'];
	$agama = $_POST['agama'];
	$asalSekolah = $_POST['asalSekolah'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	$namaWali = $_POST['namaWali'];
	$nBahasa = $_POST['nBahasa'];
	$nMath = $_POST['nMath'];
	$nIPA = $_POST['nIPA'];
	$nEnglish = $_POST['nEnglish'];
	$danem = $_POST['danem'];
	$namaFolder = "Foto/";
	$jk = $_POST['jKelamin'];
	
	$jenis = mysql_real_escape_string($_POST['selected_comb']);
	echo "$jenis";
	
	$ubahTgl=$ex->ubahTanggal($date);
	
	$kolom="nama,tempat_lahir, tgl_lahir, jenis_kelamin, agama, asal_sekolah, email, alamat, telp, nama_wali, nilai_1, nilai_2, nilai_3, nilai_4, rata_nilai";
	$values = "'$nama','$tempatLahir','$ubahTgl','$jenis',
	'$agama','$asalSekolah','$alamat','$email','$telp','$namaWali','$nBahasa','$nMath','$nIPA','$nEnglish','$danem'";
	
	$ex->insert("tb_siswa",$kolom,$values);
	
	/*Upload*/
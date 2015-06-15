<?php 	
	if(!empty ($_FILES["foto"]["type"])){
		$jenisFoto = $_FILES['foto']['type'];
		
		if($jenisFoto=="image/jpg"||$jenisFoto=="image/jpeg"||$jenisFoto=="image/x-png"){
			
			$gambar = $namafolde.basename($_FILES['foto']['name']);
		}
	}
?>
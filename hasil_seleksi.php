<table class="table table-hover">
	<thead>
    	<tr>
        	<td>No Pendaftaran</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Asal Sekolah</td>
            <td>Alamat</td>
            <td>Danem</td>
        </tr>
    </thead>
    <tbody>
    	<?php 
			include "class/classCrud.php";
			$exe = new crudQu;
			$exe->getDatabase();
			$order = "rata_nilai";
			
			$isi = "SELECT * FROM tb_siswa ORDER BY 'rata_nilai'";
			$query = mysql_query($isi) or die(mysql_error());
			while ($data=mysql_fetch_array($isi)){
				echo"
					<tr>
						<td>".$data['no_pendaftaran']."</td>
					</tr>
				";
			}
		?>
    </tbody>
</table>
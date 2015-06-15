<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Selamat Datang Di Sistem Informasi Penelitian</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container">
    	<div class="break" style="margin-top:20&;"></div>
    	<div class="row">
        	<div class="col-md-8">
            	<h1>Sistem Informasi Penelitian</h1>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
            	<table class="table">
                   <caption><a href="tambah_data.php">Tambah data</a></caption>
                   <thead >
                      <tr>
                         <th>No</th>
                         <th>Judul Berita</th>
                      </tr>
                   </thead>
                   <tbody>
                   <?php 
				   		include("koneksi.php");
						$query = mysql_query("Select *from tb_berita ORDER BY id_berita") or die (mysql_error());
						
						if (mysql_num_rows($query)==0){
								echo'<tr><td colspan="6">Data Kosong</td></tr>';
							}
							else {
								$no =1;
								while($data=mysql_fetch_assoc($query)){
									echo"<tr class='active'>";
                         					echo"<td>$no</td>";
                         					echo"<td>$data[judul_berita]</td>";
                        	 				echo"<td>";
											echo"<a href='ubah_data.php?id=$data[id_berita]'>Edit</a>";
										 	echo"</td>";
									  echo"</tr>";
									 $no++;
								}	
							}
				   ?>
                   </tbody>
                </table> 
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php 
	include("header.php");
	session_start();
	$username = $_SESSION['username'];
	$masuk = $_SESSION['masuk'];
	if ($masuk != '1'){
		session_destroy();
		header('location:login.php');
	}
?>
  <body>
  	<div class="container">
        <div class="page-header">
            <div class="row">
            	<div class="col-md-3" align="center">
                	<img class="img-responsive" src="images/ppdb-logo.png">
                </div>
                <div class="col-md-9">
                	<h1>Selamat datang dihalaman administrator</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
				include("menu.php");
			?>
            <div class="col-md-9" id="isiHalaman">
            	<?php 
					$halaman = @$_GET['halaman'];
					if($halaman==''){
						include("dashboard.php");
					}
					else if($halaman=='hasil-seleksi'){
						include ("hasil-seleksi.php");
					}
					else if($halaman=='tambah-admin'){
						include ("tambah-admin.php");
					}
					else if($halaman=='logout'){
						include ("logout.php");
					}
				?>
        	</div>
    	</div>
    </div>
    <!--- kontainer --->
<?php 
	include_once "footer.php";
?>
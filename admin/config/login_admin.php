<?php 
	session_start();
	include ("../../config/database.php");
	if(!empty($_POST)){
		$username = $_POST['txtUsername'];
		$password = $_POST['txtPassword'];
		
		$sql = "SELECT * FROM tb_admin WHERE username = '$username' AND pass='$password'";
		$query = mysql_query($sql)or die ("QUERY GAGAL");
		
		if($query){
			$row = mysql_num_rows($query);
			if($row > 0){
				$_SESSION['username']=$username;
				$_SESSION['masuk']=1;
				header ('location:../index.php');
				echo"berhasil Login";
			}else{
				echo"Ada yang salah Broo !";	
			}
		}		
	}
?>
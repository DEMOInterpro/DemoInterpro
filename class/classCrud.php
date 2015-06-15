<?php 
	include "classDB.php";
	
	class crudQu extends connectDB{
		public $command;
		
		public function insert($tabel, $col, $values){
			$this->command= "INSERT INTO ".$tabel." (".$col.") VALUES (".$values.")";
			$query = mysql_query($this->command);
			if(!$query){
				echo"<script>alert('Insert Gagal');history.back()</script>";
				exit();
			}
		}
		
		public function updte ($table, $set, $colom, $values){
			$this->command = "UPDATE ".$table." SET ".$set." WHERE ".$colom." = '".$values."' ";
			$query = mysql_query($this->command);
			if(!$query){
				echo"<script>alert('Update Gagal');history.back()</script>";
			}
		}
		
		public function delete($table, $colom, $values){
			$this->command="DELETE FROM ".$table." WHERE ".$colom." = '".$values."'";
			$query=mysql_query($this->command);
			if(!$query){
				echo"<script>alert('Hapus  Gagal');history.back()</script>";
			}
		}
		
		public function tampil($table, $colom){
			$this->command="SELECT ".$colom." FROM ".$table."";
			if($where != null){
				$this->command .="WHERE".$where;
			}
			if($order != null){
				$this->command .="ORDER BY ".$order;
			}
			
			$query = mysql_query($this->command)or die("Query GAGAL");
			return $this->command;
			
		}
		
		public function edit($table, $colom, $id){
			$this->command="SELECT * FROM ".$table." WHERE ".$colom." = '".$id."'";
			return $this->command;
		}
		
		public function ubahTanggal ($tgl){
			$pisah = explode('/',$tgl);
			$urutan = array($pisah[2],$pisah[1],$pisah[0]);
			$satukan = implode('-',$urutan);
			return $satukan;	
		}
		
		
	}
?>
<?php
	function tambahData($nama, $notlp, $id_status, $id_agama, $id_jk, $alamat, $tempatlahir, $tgl_lahir ){
		global $link;

		$query =	"INSERT INTO customer (nama, notlp, id_status, id_agama, id_jk, alamat, tempatlahir, tgl_lahir) 
					VALUES ('$nama', '$notlp', '$id_status', '$id_agama', '$id_jk', '$alamat', '$tempatlahir', '$tgl_lahir')";
		
		if(mysqli_query($link, $query) or die('query tambah gagal')){
			$last_id = mysqli_insert_id($link);
			//echo $last_id; die();
			$niks 	 = "MH".$last_id.rand(10,1000);
			$query 	 =	"UPDATE customer SET nik = '$niks'
											
										WHERE id = '$last_id' "; 
		
			if(mysqli_query($link, $query) or die('query edit gagal')){
				return true;
			}else {
				return false;
			}
			return true;
		}else {
			return false;
		}
		
	}


	function editData($nama, $notlp, $id_status, $id_agama, $id_jk, $alamat, $tempatlahir, $tgl_lahir, $id ){
		global $link;

		$query =	"UPDATE customer SET 	nama 		= '$nama',
											notlp		= '$notlp',
											id_status	= '$id_status',
											id_agama	= '$id_agama',
											id_jk		= '$id_jk',
											alamat		= '$alamat',
											tempatlahir	= '$tempatlahir',
											tgl_lahir	= '$tgl_lahir'
								WHERE id = $id"; 
		
		if(mysqli_query($link, $query) or die('query edit gagal')){
			return true;
		}else {
			return false;
		}
		
	}

	function tampil(){
		global $link;

		$query 	= "SELECT * from assets where id desc
		";
		$result	= mysqli_query($link, $query) or die('query tampil gagal');
	
		return $result;
	}

	function tampil_per_nik($id){
		global $link;

		$query 	= "SELECT * FROM customer WHERE id = $id";
		$result	= mysqli_query($link, $query) or die('query tampil per nik gagal');
	
		return $result;
	}


	function hapusData($id){
		global $link;

		$query 	=	"DELETE FROM customer WHERE id = $id";

		if(mysqli_query($link, $query) or die('query hapus gagal')){
			return true;
		}else {
			return false;
		}
		
	}


?>
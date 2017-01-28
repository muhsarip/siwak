<?php
session_start();
require_once('core/init.php');
if (isset($_POST['submit'])) {

	if (isset($_POST['aset_id']) AND  isset($_POST['judul']) AND isset($_POST['keterangan'])) {
		global $link;

		$query = "INSERT INTO sengketa (aset_id, nadzir_id, judul, keterangan, status, dibuat_pada ) VALUES 
					('".$_POST['aset_id']."',
					 '".$_SESSION['nadzir_id']."', 
					 '".$_POST['judul']."', 
					 '".$_POST['keterangan']."', 
					 'Pendaftaran', 
					 '".date("Y-m-d",time())."')";

			// echo $query;
			if (mysqli_query($link, $query) or die('query tambah gagal')) {

				echo "Query tambah sukses";
				echo"<meta http-equiv='refresh' content='1; url=index3.php'>";
			}

	} else
	{
	echo "gagal, input lagi!!!"; 
	echo"<meta http-equiv='refresh' content='1; url=login-form/pendaftaran2.php'>";
	}
	
}

?>
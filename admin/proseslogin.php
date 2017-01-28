<?php 
session_start();
require_once('db/connect.php');

if (isset($_POST['email']) and isset($_POST['password'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

		
	$db = "SELECT * FROM admin WHERE email='".$email."' and password='".$password."' limit 1 ";

	global $link;

	$query = mysqli_query($link, $db);

	if ($query) {

		$rowcount = mysqli_num_rows($query);
		
		if ($rowcount>0) {

			while ($row = mysqli_fetch_assoc($query)) {
		        $_SESSION['admin_id'] = $row['id'];
				echo '';//$_SESSION['admin_id'];
		    }
		} else {
			echo "Kurang Tepat";
		}
	}else{
		echo "Suatu hambatan terjadi, silahkan coba kembali.";
	}
	
}else{
	echo "Silahkan lengkapi email dan password.";
}


?>
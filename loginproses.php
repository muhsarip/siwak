<?php
session_start();
require_once('core/init.php');


if (isset($_POST['username']) && isset($_POST['password'])) {
	
	$db = "SELECT * FROM nadzir WHERE email='".$_POST['username']."' and password='".md5($_POST['password'])."' limit 1 ";

	global $link;

	$query = mysqli_query($link, $db);

	if ($query) {

		$rowcount = mysqli_num_rows($query);
		
		if ($rowcount>0) {

			while ($row = mysqli_fetch_assoc($query)) {
		        $_SESSION['nadzir_id'] = $row['id'];
				echo $_SESSION['nadzir_id'];
		    }
			
			header('location: index3.php');
		} else {
			echo "Kurang Tepat";
			echo"<meta http-equiv='refresh' content='1; url=login-form/index.php'>";
		}
	}else{
		echo "query diem";
	}
}else{
	echo "kosong";
}

// $query = "SELECT * FROM user";
// if (mysqli_query($link, $query)== TRUE) {

// 	echo "query berhasil";
// } else {
// 	echo "query gagal";
// }


// $error ='';
// if (!isset($_POST['submit'])) {

// 	if (empty($_POST['username']) || empty($_POST['password'])) {
// 		$error ="Username Atau Password Salah";
// 	}
// 	else {

// 		$username = $_POST['username'];
// 		$password = $_POST['password'];

// 		$connection = mysqli_connect("localhost", "root", "");

// 		$username = stripcslashes($username);
// 		$password = stripcslashes($password);

// 		$username = mysqli_real_escape_string($username);
// 		$password = mysqli_real_escape_string($password);

// 		$query = mysqli_query("SELECT * FROM user WHERE password ='$password' AND username = '$username' ", $connection );
// 		$rows = mysqli_num_rows($query);

// 		if ($rows == 1) {
// 			// $_SESSION['login_user'] = $username;
// 			header('location: ../index2.php');
// 		} else {
// 			$error = "Username Atau Password Salah";
// 		}

// 		mysqli_close($connection);

		
		
// 	}

// }
?>
<?php
require_once('../core/init.php');
// session_start();

global $link;

// $query = "SELECT * FROM user";
// if (mysqli_query($link, $query)== TRUE) {

// 	echo "query berhasil";
// } else {
// 	echo "query gagal";
// }


$error ='';
if (!isset($_POST['submit'])) {

	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error ="Username Atau Password Salah";
	}
	else {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$connection = mysqli_connect("localhost", "root", "");

		$username = stripcslashes($username);
		$password = stripcslashes($password);

		$username = mysqli_real_escape_string($username);
		$password = mysqli_real_escape_string($password);

		$query = mysqli_query("SELECT * FROM user WHERE password ='$password' AND username = '$username' ", $connection );
		$rows = mysqli_num_rows($query);

		if ($rows == 1) {
			$row = mysql_fetch_assoc($query);
			$_SESSION['nadzir_id'] = $row['id'];
			// $_SESSION['login_user'] = $username;
			header('location: ../index2.php');
		} else {
			$error = "Username Atau Password Salah";
		}

		mysqli_close($connection);

		
		
	}

}
?>
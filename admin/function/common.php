<?php 

function checklogin(){

	if (!isset($_SESSION['admin_id'])) {
		header("location:login.php");
		
	}
}


?>
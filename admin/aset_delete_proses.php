<?php
require_once('db/connect.php');

if ($_GET['id'] != null) {
	$query = "DELETE FROM aset WHERE id=".$_GET['id'];
	if (mysqli_query($link, $query)) {
        echo "";
    }else{
      echo "Gagal menghapus aset, silahkan coba kembali.";
    }
}else{
	echo "Gagal menghapus aset, silahkan coba kembali.";
}

?>
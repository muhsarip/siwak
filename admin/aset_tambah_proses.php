<?php
require_once('db/connect.php');
//require_once('template/header.php');
global $Link;
$arrayField = array('nama','kategori_id','wakif','nadzir_id','keterangan','alamat','longitude','latitude');
$checkNum = 0;
$message = '';
foreach ($arrayField as $key) {
  if (isset($_POST[$key])) {
    if ($_POST[$key] == '') {
      $checkNum+=1;
      $message .= str_replace("_", " ", $key)." dibutuhkan.<br>";
    }
    
  }
}
if ($checkNum > 0) {
  echo $message; die();
}else{
  $query = "
    INSERT INTO aset (nama,kategori_id,wakif,nadzir_id,keterangan,alamat,longitude,latitude)
    VALUES ( 
      '".$_POST['nama']."',
      '".$_POST['kategori_id']."',
      '".$_POST['wakif']."',
      '".$_POST['nadzir_id']."',
      '".$_POST['keterangan']."',
      '".$_POST['keterangan']."',
      '".$_POST['longitude']."',
      '".$_POST['latitude']."'
    )
    ";

    // echo $query;
    if (mysqli_query($link, $query)) {
        echo '';
    }else{
      echo "Gagal menyimpan aset, silahkan dicoba kembali kemudian.";
    }
}


?>
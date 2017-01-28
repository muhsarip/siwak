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
    update aset set 
      nama='".$_POST['nama']."',
      kategori_id='".$_POST['kategori_id']."',
      wakif='".$_POST['wakif']."',
      nadzir_id='".$_POST['nadzir_id']."',
      keterangan='".$_POST['keterangan']."',
      alamat='".$_POST['keterangan']."',
      longitude='".$_POST['longitude']."',
      latitude='".$_POST['latitude']."'
    where id='".$_POST['id']."'
    ";

    // echo $query;
    if (mysqli_query($link, $query) or die('query tambah gagal')) {
        echo "";
    }else{
      echo "Gagal menyimpan aset, silahkan dicoba kembali kemudian.";
    }
}


?>
<!-- template header  -->
<?php include("template/header2.php") ?>

 
<?php
require_once('core/init.php');
//require_once('template/header.php');
if (isset($_GET['id'])) {
	$query 	= "SELECT * from aset where kategori_id=".$_GET['id']." limit 10";
	$result	= mysqli_query($link, $query) or die('query tampil gagal');
}else{
	header('location: index3.php');
}


?>
<div id="main-area" class="container">
	<div class="row" style="background: white;min-height: 300px;margin: 30px 0px 0px 0px;padding: 20px;">

    <?php  
      $nomer =1;
        while($row = mysqli_fetch_assoc($result)) { 
          echo '
            <div class="col-lg-12" style="background:#ced1d4;margin:0px 0px 20px 0px;border-radius:0px 40px 0px 40px;padding-bottom:20px;">
              <div class="text-center">
              <h3><Strong>'.$row['nama'].'</strong></h3>
              </div>
              
              <h4>No. Aset : WK-JKT-'.$row['id'].' </h4>
              <div class="row">
                <div class="col-lg-3">
                  <p>Wakif : </p>
                  <p>Alamat :  '.$row['alamat'].'</p>
                  <p>Nadzir : </p>
                  <p>Wakif : </p>
                  <p>Peruntukan : </p>
                </div>
                <div class="col-lg-9">
                  <div class="map" id="map'.$row['id'].'"></div>
                </div>
              </div>
              
            </div>
          ';
          $nomer++;

        }
      ?>

		
	</div>
</div>
<script type="text/javascript">



function initMap(condition) {
    <?php  
      $result = mysqli_query($link, $query) or die('query tampil gagal');
      $nomerA =1;
        while($rowA = mysqli_fetch_assoc($result)) { 
          echo 'var map'.$rowA['id'].';';
          $nomerA++;

        }
    ?>
    // create the maps
    var myOptions = {
        zoom: 11,
        center: {lat:  -6.21, lng:  106.85 },
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    
    <?php  
      $result = mysqli_query($link, $query) or die('query tampil gagal');
      $nomerB =1;
        while($rowB = mysqli_fetch_assoc($result)) { 
          echo '
              map'.$rowB['id'].' = new google.maps.Map(document.getElementById("map'.$rowB['id'].'"), myOptions);
              var uluru = {lat: '.$rowB['latitude'].', lng: '.$rowB['longitude'].'};
              var marker = new google.maps.Marker({
                position: uluru,
                map: map'.$rowB['id'].'
              });
          ';
          $nomerB++;
        }
    ?>
}
</script> 
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOFjoovvv7vkB9fqTZAL8cP9YLvsbu9G8&callback=initMap">
</script>

<!-- template footer  -->
<?php include("template/footer2.php") ?>
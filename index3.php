<!-- template header  -->
<?php include("template/header2.php") ?>

 
<?php
require_once('core/init.php');
//require_once('template/header.php');

$query 	= "SELECT * from aset limit 10";
$result	= mysqli_query($link, $query) or die('query tampil gagal');

$queryKategori 	= "SELECT * from kategori limit 10";
$resultKategori	= mysqli_query($link, $queryKategori) or die('query tampil gagal');

?>
<div id="main-area" class="container">
	<div class="row" style="background: white;min-height: 300px;margin: 30px 0px 0px 0px;padding: 20px;">
		<div class="col-lg-2">
			<button type="button" class="btn btn-primary" style="margin-bottom: 20px;">
				Kategori 
				<span class="badge"><?php echo mysqli_num_rows($resultKategori) ?></span>
			</button>
			<div class="list-group">
				<?php  
				$nomer =1;
					while($row = mysqli_fetch_assoc($resultKategori)) { 
						echo '
							<a href="kategori.php?id='.$row['id'].'" class="list-group-item  list-group-item-success">'.$row['nama'].'</a>
						';
						$nomer++;
					}
				?>
			</div>
		</div>
		<div class="col-lg-5">
			<button type="button" class="btn btn-primary" style="margin-bottom: 20px;">
				Peta Lokasi Aset 
				<span class="badge"><?php echo mysqli_num_rows($result) ?></span>
			</button>
			<div id="map"></div>
		</div>
		<div class="col-lg-5">
			<button type="button" class="btn btn-primary" style="margin-bottom: 20px;">
				Daftar Aset 
				<span class="badge"><?php echo mysqli_num_rows($result) ?></span>
			</button>
			<table class="table-main" >
				<tbody>
					<tr>
						<td style="font-weight: 700; text-align: center; width: 30px;" class="imVc">
							No
						</td>
						<td style="font-weight: 700; text-align: center; width: 122px;" class="imVc">
							Nama
						</td>
						<td style="font-weight: 700; text-align: center; width: 122px;" class="imVc">
							Alamat
						</td>
					</tr>


					<?php 
					$no =1;
					while($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
								<td> <?php echo $no++ ?> </td>
								<td> <?php echo $row['nama']; ?> </td>
								<td> <?php echo $row['alamat']; ?> </td>
					<?php } ?>
					<tr>
						<td colspan="3" style="text-align:center !important;">
							<a class="no-underline" href="">Lihat Selengkapnya</a>
						</td>
					</tr>


				</tbody>
			</table>
		</div>
		
	</div>
	
</div>
<script>
  function initMap() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOFjoovvv7vkB9fqTZAL8cP9YLvsbu9G8&callback=initMap">
</script>

<!-- template footer  -->
<?php include("template/footer2.php") ?>
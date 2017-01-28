<!-- template header  -->
<?php include("template/header2.php"); ?>

 
<?php
require_once('core/init.php');
//require_once('template/header.php');
global $Link;
$query 	= "SELECT sengketa.*, aset.* from sengketa 
			INNER JOIN aset ON aset.id = sengketa.aset_id 
			  ";
$result =mysqli_query($link, $query);
if ($result) {
	$total_record = mysqli_num_rows($result);
}else{
	echo $query;
	echo mysqli_error($link);
	die();
}

?>
<div id="main-area" class="container">
	<div class="row" style="background: white;min-height: 300px;margin: 30px 0px 0px 0px;padding: 20px;">
		<div class="col-lg-12">
			<h1 style="color: #04652d">Daftar Sengketa Aset Wakaf</h1>
			<small style="color: gray">Total Sengketa : <?php echo $total_record; ?> Aset</small>
			<br>
			<a href="pendaftaran2.php" class="btn btn-warning" style="margin-top: 20px;">Daftarkan Sengketa Aset</a>
		</div>
		<?php  
		$nomer =1;
			
			if ($total_record > 0) {
				while($row = mysqli_fetch_assoc($result)) { 
					echo '
					<div class="col-lg-12">
						<h3><strong>Aset :</strong>  '.$row['nama'].' <span class="badge">Tahap: Pendaftaran</span></h3>
						<p>
							<strong>Alamat</strong> : '.$row['alamat'].'
						</p>
						<p>
							<strong>Wakif</strong> : Drs. H. Sule
						</p>
						<p>
							<strong>Permasalahan Sengketa</strong> : Klaim dari ahli waris, setelah di wakafkan setahun.
						</p>
					</div>
					';
					$nomer++;
				}
			}else{
				echo '
				<div class="col-lg-12">
					<p>
						Tidak ada sengketa aset yang terdaftar.
					</p>
				</div>
				';
			}
			
		?>
		
	</div>
</div>

<!-- template footer  -->
<?php include("template/footer2.php") ?>
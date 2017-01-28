<!-- template header  -->
<?php include("template/header2.php") ?>


<?php
require_once('core/init.php');
//require_once('template/header.php');

$query 	= "SELECT * from aset WHERE  nadzir_id = ".$_SESSION['nadzir_id']." ";
$result	= mysqli_query($link, $query) or die('query tampil gagal');

$row = mysqli_fetch_assoc($result);

?>
<div id="main-area" class="container">
	<div class="row" style="background: white;min-height: 300px;margin: 30px 0px 0px 0px;padding: 20px;">
		
		<h3>Pendaftaran Laporan Sengketa Aset</h3>
		<div class="row">
			<div class="col-md-12">
			<form name="" method="POST" action="pendaftaran2proses.php">
				<input type="hidden" name="aset_id" value="<?php echo $row['id'];  ?>">
				<table class="table table-hover">
					
					<tr>
						<td><label class="" for="nama">Aset</label></td>
						<td><input id="nama" type="text" name="aset" class="form-control" value="<?php echo $row['nama']; ?>" readonly>  </td>
					</tr>
					
					<tr>
						<td><label class="" for="nik">Judul Sengketa</label></td>
						<td><input id="nik" type="text" name="judul" class="form-control" value="" required></td>
					</tr>

					<tr>
						<td><label class="" for="alamat">Deskripsi</label></td>
						<td><textarea id="alamat" class="form-control" rows="5" name="keterangan" required></textarea></td>
					</tr>

					<tr>
						<td colspan="6" align="right"><input type="submit" name="submit" value="Simpan" class="btn btn-primary"> <input type="reset" name="ulang" value="Ulang" class="btn btn-primary"> <a href="index.php" class="btn btn-primary">Batal</a></td>
					</tr>

				</table>
			</div>

			
				</form>
	
			</div>
	</div>

<!-- template footer  -->
<?php include("template/footer2.php") ?>
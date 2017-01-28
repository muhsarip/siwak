<?php
require_once('core/init.php');
//require_once('template/header.php');

$keyword = $_POST['keyword'];
if ($keyword != '') {
	$query 	= 'SELECT * from aset where nama like "%'.$keyword.'%"  ';


	$result	= mysqli_query($link, $query) or die('query tampil gagal');
}


?>


<?php include("template/header.php"); ?>

			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
					<div id="imSearchPage">
						<h2 id="imPgTitle">Search results</h2>
						<div style="text-align: center;">
							<table data-minrequestedwidth="388" data-computedwidth="388" style="width: 388px;"><tbody><tr><td colspan="3" rowspan="1" style="text-align: center; width: 380px; height: 60px;" class="imVt"><b><br>Masjid</b></td></tr><tr><td style="text-align: center; height: 60px; width: 122px;" class="imVc">No</td><td style="text-align: center; width: 122px; height: 60px;" class="imVc">Nama</td><td style="text-align: center; width: 122px; height: 60px;" class="imVc">Alamat</td></tr>


						<?php 
						$no =1;
						while($row = mysqli_fetch_assoc($result)) { ?>
							<tr>
									<td> <?php echo $no++ ?> </td>
									<td> <?php echo $row['nama']; ?> </td>
									<td> <?php echo $row['alamat']; ?> </td>
						<?php } ?>


							</tbody>
							</table>
						</div>
					</div>
					<div class="imClear"></div>
				</div>
			</div>

<?php include("template/footer.php"); ?>



			
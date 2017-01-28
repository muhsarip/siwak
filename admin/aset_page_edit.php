<?php  include("template/header.php")  ?>

<?php
require_once('db/connect.php');

if (!empty($_GET['id'])) {
	global $Link;
	$query  = "
	          SELECT * from aset where id=".$_GET['id']." limit 1

	        ";
	$result =mysqli_query($link, $query);
	if ($result) {
	  $total_record = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
	}else{
	  echo $query;
	  echo mysqli_error($link);
	  die();
	}


  //get kategori
  $query2 = "SELECT * FROM kategori  ";
  $result2 =mysqli_query($link, $query2);
  $total_record2 = mysqli_num_rows($result2);

  //get kategori
  $query3 = "SELECT * FROM nadzir  ";
  $result3 =mysqli_query($link, $query3);
  $total_record3 = mysqli_num_rows($result3);
}


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Aset
      <small>.</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="aset_page.php">Daftar Aset</a></li>
      <li>Edit Aset</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- /.row -->
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><button onclick="goBack()" class="btn btn-warning">Kembali</button> Edit Aset Wakaf</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div id="alertMessageError" class="alert alert-danger" style="display:none;">
      
        </div>
        <div id="alertMessageSuccess" class="alert alert-success" style="display:none;">
      
        </div>
        <form class="form-horizontal" method="post" id="formDataAset">
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    		  <div class="form-group">
    		    <label class="control-label col-sm-2" for="email">Nama:</label>
    		    <div class="col-sm-10">
    		      <input type="text" name="nama" value="<?php echo $row['nama'] ?>" class="form-control" id="namas" placeholder="Nama aset ..." required>
    		    </div>
    		  </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Wakif:</label>
            <div class="col-sm-10">
              <input type="text" name="wakif" value="<?php echo $row['wakif'] ?>" class="form-control" id="Wakif" placeholder="Nama Wakif ..." required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Kategori:</label>
            <div class="col-sm-10">
              <select class="form-control" name="kategori_id" id="kategori_id" required>
                <?php 
                if ($total_record2 > 0) {
                  while ($row3 = mysqli_fetch_assoc($result2)) {
                    echo '
                      <option value="'.$row3['id'].'">'.$row3['nama'].'</option>
                    ';
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Nadzir:</label>
            <div class="col-sm-10">
              <select id="nadzir_id" class="form-control" name="nadzir_id" required>
                <?php 
                if ($total_record3 > 0) {
                  while ($row4 = mysqli_fetch_assoc($result3)) {
                    echo '
                      <option value="'.$row4['id'].'">'.$row4['nama_lengkap'].'</option>
                    ';
                  }
                }
                ?>
              </select>
              
            </div>
          </div>
    		  <div class="form-group">
    		    <label class="control-label col-sm-2" for="pwd">Keterangan:</label>
    		    <div class="col-sm-10"> 
    		      <textarea type="text" name="keterangan" class="form-control" id="keterangan"  placeholder="Keterngan ..." required><?php echo $row['keterangan'] ?></textarea>
    		    </div>
    		  </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Alamat:</label>
            <div class="col-sm-10"> 
              <textarea type="text" name="alamat" class="form-control" id="keterangan"  placeholder="Alamat ..." required><?php echo $row['alamat'] ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Longitude:</label>
            <div class="col-sm-10">
              <input type="number" name="longitude" value="<?php echo $row['longitude'] ?>" class="form-control" id="longitude" placeholder="Longitude ..." required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Latitude:</label>
            <div class="col-sm-10">
              <input type="number" name="latitude" value="<?php echo $row['latitude'] ?>" class="form-control" id="latitude" placeholder="Latitude ..." required>
            </div>
          </div>

    		  <div class="form-group"> 
    		    <div class="col-sm-offset-2 col-sm-10">
              <button onclick="goBack()" class="btn btn-warning">Batal</button>&nbsp
    		      <button id="saveData" type="submit" class="btn btn-default">Simpan</button>
    		    </div>
    		  </div>
    		</form>

      </div>
      <!-- /.box-body -->
     <!--  <div class="box-footer">
        Footer
      </div> -->
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<script type="text/javascript">
  $("#nadzir_id").val('<?php echo $row['nadzir_id'] ?>');
  $("#kategori_id").val('<?php echo $row['kategori_id'] ?>');

  

  //save data
  $("#saveData").click(function(e){
    e.preventDefault();
    $("#saveData").text("Menyimpan ....");
    $("#saveData").attr("disabled","");
    var data = $("#formDataAset").serialize();
    $(".alert").fadeOut();
    setTimeout(function(){ 
      $.post("aset_edit_proses.php", data, function(result){
          $("#saveData").removeAttr("disabled");
          $("#saveData").html("Simpan");
          if (result == '') {
            $("#alertMessageSuccess").fadeIn();
            $("#alertMessageSuccess").html("Berhasil simpan data.");
          }else{
            $("#alertMessageError").fadeIn();
            $("#alertMessageError").html("<strong>Silahkan lengkapi isian :</strong><br>"+result);
          }
      });
    }, 2000);
    
  });

</script>
<?php  include("template/footer.php")  ?>
<?php  include("template/header.php")  ?>

<?php
require_once('db/connect.php');


	global $Link;
  
  //get kategori
  $query2 = "SELECT * FROM kategori  ";
  $result2 =mysqli_query($link, $query2);
  $total_record2 = mysqli_num_rows($result2);

  //get kategori
  $query3 = "SELECT * FROM nadzir  ";
  $result3 =mysqli_query($link, $query3);
  $total_record3 = mysqli_num_rows($result3);



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
      <li>Tambah Aset</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- /.row -->
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><button onclick="goBack()" class="btn btn-warning">Kembali</button> Tambah Aset Wakaf</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="alert alert-info">
          <strong>Info :</strong> Foto aset bisa ditambahkan setelah di simpan.
        </div>
        <div id="alertMessageError" class="alert alert-danger" style="display:none;">
      
        </div>
        <div id="alertMessageSuccess" class="alert alert-success" style="display:none;">
      
        </div>
        <form class="form-horizontal" method="post" id="formDataAset">
    		  <div class="form-group">
    		    <label class="control-label col-sm-2" for="email">Nama:</label>
    		    <div class="col-sm-10">
    		      <input type="text" name="nama" class="form-control" id="namas" placeholder="Nama aset ...">
    		    </div>
    		  </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Wakif:</label>
            <div class="col-sm-10">
              <input type="text" name="wakif" class="form-control" id="Wakif" placeholder="Nama Wakif ...">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Kategori:</label>
            <div class="col-sm-10">
              <select class="form-control" name="kategori_id" id="kategori_id">
                <?php 
                if ($total_record2 > 0) {
                  while ($row = mysqli_fetch_assoc($result2)) {
                    echo '
                      <option value="'.$row['id'].'">'.$row['nama'].'</option>
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
              <select class="form-control" name="nadzir_id" id="nadzir_id">
                <?php 
                if ($total_record3 > 0) {
                  while ($row = mysqli_fetch_assoc($result3)) {
                    echo '
                      <option value="'.$row['id'].'">'.$row['nama_lengkap'].'</option>
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
    		      <textarea type="text" name="keterangan" class="form-control" id="keterangan"  placeholder="Keterngan ..."></textarea>
    		    </div>
    		  </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Alamat:</label>
            <div class="col-sm-10"> 
              <textarea type="text" name="alamat" class="form-control" id="keterangan"  placeholder="Alamat ..."></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Longitude:</label>
            <div class="col-sm-10">
              <input type="number" name="longitude" class="form-control" id="longitude" placeholder="Longitude ...">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Latitude:</label>
            <div class="col-sm-10">
              <input type="number" name="latitude" class="form-control" id="latitude" placeholder="Latitude ...">
            </div>
          </div>

    		  <div class="form-group"> 
    		    <div class="col-sm-offset-2 col-sm-10">
              <button onclick="goBack()" class="btn btn-warning">Batal</button>&nbsp
    		      <button type="submit" id="saveData" class="btn btn-default">Simpan</button>

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
   //save data
  $("#saveData").click(function(e){
    e.preventDefault();
    $("#saveData").text("Menyimpan ....");
    $("#saveData").attr("disabled","");
    var data = $("#formDataAset").serialize();
    $(".alert").fadeOut();
    setTimeout(function(){ 
      $.post("aset_tambah_proses.php", data, function(result){
          $("#saveData").removeAttr("disabled");
          $("#saveData").html("Simpan");
          if (result == '') {
            $("#alertMessageSuccess").fadeIn();
            $("#alertMessageSuccess").html("Berhasil simpan data.");
            $('#formDataAset')[0].reset();
          }else{
            $("#alertMessageError").fadeIn();
            $("#alertMessageError").html("<strong>Silahkan lengkapi isian :</strong><br>"+result);
          }
      });
    }, 2000);
    
  });
</script>

<?php  include("template/footer.php")  ?>
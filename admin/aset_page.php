<?php  include("template/header.php")  ?>

<?php
require_once('db/connect.php');
//require_once('template/header.php');
global $Link;
$query  = "
          SELECT 
              aset.* ,
              kategori.nama as 'kategori_nama',
              nadzir.nama_lengkap as 'nadzir_nama'
          from aset 
          left JOIN kategori ON aset.kategori_id = kategori.id
          left JOIN nadzir ON aset.nadzir_id = nadzir.id

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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Aset
      <small>Daftar Aset Wakaf yang telah terdaftar.</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li>Daftar Aset</li>

    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- /.row -->
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Data Aset Wakaf</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div style="padding-bottom: 20px;">
          <a href="aset_page_tambah.php" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Menambah Aset</a>
        </div>
        
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nomor Aset</th>
              <th>Nama Aset</th>
              <th>Kategori</th>
              <th>Wakif</th>
              <th>Nadzir</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php  
            $nomer =1;
              
              if ($total_record > 0) {
                while($row = mysqli_fetch_assoc($result)) { 
                  echo '
                  <tr id="WK-JKT-'.$row['id'].'">
                    <td>WK-JKT-'.$row['id'].'</td>
                    <td>'.$row['nama'].'</td>
                    <td>'.$row['kategori_nama'].'</td>
                    <td>'.$row['wakif'].'</td>
                    <td>'.$row['nadzir_nama'].'</td>
                    <td>
                      <a href="aset_page_edit.php?id='.$row['id'].'" class="btn btn-primary">Ubah</a>
                      <a href="'.$row['id'].'"  data-nama="'.$row['nama'].'" class="btn btn-warning delete-aset">Hapus</a>
                    </td>
                  </tr>
                  ';
                  $nomer++;
                }
              }else{
                echo '
                <tr>
                    <td colspan="5">Tidak ada aset wakf yang terdaftar.</td>
                  </tr>
                ';
              }
              
            ?>
            
          </tbody>
        </table>

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
  //delete data aset
  $(".delete-aset").on("click",function(e){
    e.preventDefault();
    var nama = $(this).attr("data-nama");
    var id = $(this).attr("href");
    alertify.confirm('Hapus Aset Wakaf', 'Apakah anda yaking ingin menghapus Aset <br>Kode Aset : WK-JKT-'+ id +'  <br> Nama Aset : '+ nama +' ', function(){


      $.get("aset_delete_proses.php?id="+id, function(data, status){
        if (data == '') {
          alertify.success('Anda telah menghapus aset dengan kode WK-JKT-'+id+' , Nama Aset :  '+nama);

          $("#WK-JKT-"+id).css("background","red");
          $("#WK-JKT-"+id).fadeOut(); 
        }else{
          alertify.error(data);
        }
      });

      
    }, function(){ 
      alertify.error('Anda membatalakan penghapusan aset.')
    });

  });
</script>

<?php  include("template/footer.php")  ?>
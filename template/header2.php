<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Informasi Wakaf</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Sistem Informasi Wakaf Muhammadiyah</a>
	    </div>
	    <ul class="nav navbar-nav  navbar-right">
	      <li class="active"><a href="index3.php">Home</a></li>
	      <li><a href="sengketa.php">Aset Sengketa</a></li>
	      
	      <?php 
	      session_start();
	      if (!empty($_SESSION['nadzir_id'])) {
	      	echo '<li><a href="logout.php">Logout</a></li>';
	      }else{
	      	echo '<li><a href="login-form/index.php">Login Nadzir</a></li>';
	      }
	      ?>
	      
	    </ul>
	    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Aset" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>
	  </div>
	</nav>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<img src="images/logo_stmikmj copy.png" style="max-height: 200px">
			<p style="color: white;font-size: 20px;">
				Sistem Informasi Wakaf Yang berfungsi  melacak aset-aset wakaf di jakarta
			</p>
		</div>
	</div>
</div>
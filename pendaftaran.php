<?php
require_once('core/init.php');
//require_once('template/header.php');

$query 	= "SELECT * from kategori";
$result	= mysqli_query($link, $query) or die('query tampil gagal');

?>

<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title>Wakaf</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Kel-Brown" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 13.0.1.16 - www.websitex5.com" />
		<meta name="description" content="UAS Sistem Informasi Dakwah" />
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://127.0.0.1:8080/index.html" />
		<meta property="og:title" content="Masjid" />
		<meta property="og:site_name" content="Wakaf" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?13-0-1-16" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?13-0-1-16" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?13-0-1-16" media="screen" />
<link rel="stylesheet" type="text/css" href="pluginAppObj_01/style.css" media="screen, print" />
		<link rel="stylesheet" type="text/css" href="pcss/index.css?13-0-1-16-636151906152457414" media="screen" />
		<script type="text/javascript" src="res/jquery.js?13-0-1-16"></script>
		<script type="text/javascript" src="res/x5engine.js?13-0-1-16" data-files-version="13-0-1-16"></script>
		<script type="text/javascript" src="res/x5engine.offline.js?13-0-1-16-636151906152134882"></script>
		
		
		
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('Your browser does not support the features necessary to display this website.','Your browser may not support the features necessary to display this website.','[1]Update your browser[/1] or [2]continue without updating[/2].','http://outdatedbrowser.com/'); };
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="favicon.png?13-0-1-16-636151906152134882" type="image/png" />
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Wakaf</h1>
				<div id="imHeaderObjects"><div id="imHeader_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_1" class="" > <div id="imHeader_imCellStyleGraphics_1"></div><div id="imHeader_imCellStyle_1" ><img id="imHeader_imObjectImage_01" src="images/logo_stmikmj copy.png" title="" alt="" />
<script type="text/javascript">
	x5engine.boot.push(function () {
		 x5engine.imagefx.rotate('#imHeader_imObjectImage_01', 20); 
	});
</script>

</div></div></div><div id="imHeader_imTextObject_09_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_9" class="" > <div id="imHeader_imCellStyleGraphics_9"></div><div id="imHeader_imCellStyle_9" ><div id="imHeader_imTextObject_09">
	<div class="text-tab-content"  id="imHeader_imTextObject_09_tab0" style="">
		<div class="text-inner">
			<div><div style="text-align: center;"><br></div><div style="text-align: center;"><span class="fs8 cf1">Sistem Informasi Wakaf Yang berfungsi &nbsp;melacak aset-aset wakaf di jakarta</span></div></div>
		</div>
	</div>

</div>
</div></div></div><div id="imHeader_imObjectSearch_10_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_10" class="" > <div id="imHeader_imCellStyleGraphics_10"></div><div id="imHeader_imCellStyle_10" ><div id="imHeader_imObjectSearch_10">

<form id="imHeader_imObjectSearch_10_form" action="search.php" method="post" > 
	<fieldset>
		<input type="text" id="imHeader_imObjectSearch_10_field" name="keyword" value="" />
		<button id="imHeader_imObjectSearch_10_button">Cari</button>
	</fieldset>
</form>

	<script>$('#imHeader_imObjectSearch_10_button').click(function() { $('#imHeader_imObjectSearch_10_form').submit(); return false; });</script></div></div></div></div><div id="imHeader_imObjectImage_11_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_11" class="" > <div id="imHeader_imCellStyleGraphics_11"></div><div id="imHeader_imCellStyle_11" ><img id="imHeader_imObjectImage_11" src="images/Black_no.circle_facebook.png" title="" alt="" /></div></div></div><div id="imHeader_imObjectImage_12_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_12" class="" > <div id="imHeader_imCellStyleGraphics_12"></div><div id="imHeader_imCellStyle_12" ><img id="imHeader_imObjectImage_12" src="images/Black_no.circle_twitter.png" title="" alt="" /></div></div></div><div id="imHeader_imObjectImage_13_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_13" class="" > <div id="imHeader_imCellStyleGraphics_13"></div><div id="imHeader_imCellStyle_13" ><img id="imHeader_imObjectImage_13" src="images/black_no.circle_youtube.png" title="" alt="" /></div></div></div></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
			<a id="imGoToMenu"></a><p class="imHidden">Main menu:</p>
			<div id="imMnMnContainer" style="background: white">

			</div>

			
			<div id="imContentContainer" style="width: 960px;position: relative;margin-left: auto;margin-right: auto;padding: 10px;min-height: 700px;">
				<div style="margin: 10px">
					<form action="proses.php" method="post">
						<table >
						<tr>
							<td>
								nama  : 
							</td>
							<td>
								: <input type="text" name="name">
							</td>
						</tr>
						<tr>
							<td>
								kategori  : 
							</td>
							<td>
								: <select>
									<?php 
									$no =1;
									while($row = mysqli_fetch_assoc($result)) {  
										echo '<option>'.$row['name'].'</option>';
										$no++; 
									} 
									?>
								  </select>
							</td>
						</tr>
						<tr>
							<td>
								url  : 
							</td>
							<td>
								: <input type="text" name="url">
							</td>
						</tr>
						<tr>
							<td>
								lokasi  : 
							</td>
							<td>
								: <input type="text" name="location">
							</td>
						</tr>
						<tr>
							<td>
								deskripsi  : 
							</td>
							<td>
								: <input type="text" name="description">
							</td>
						</tr>
						<tr>
							<td>
								alamat  : 
							</td>
							<td>
								: <textarea  type="text" name="address" cols="20" rows="10" ></textarea>
							</td>
						</tr>
						<tr>
							<td>
								waqif  : 
							</td>
							<td>
								: <input type="text" name="ahli_waqaf">
							</td>
						</tr>
						<tr>
							<td>
								penjaga  : 
							</td>
							<td>
								: <input type="text" name="security">
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<button type="submit">kirim</button>
							</td>
						</tr>
						</table>

					</form>
					
				</div>
			</div>


			<div id="imFooter">
				<div id="imFooterObjects"><div id="imFooter_imTextObject_01_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_1" class="" > <div id="imFooter_imCellStyleGraphics_1"></div><div id="imFooter_imCellStyle_1" ><div id="imFooter_imTextObject_01">
	<div class="text-tab-content"  id="imFooter_imTextObject_01_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs8">Email To Us</span></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_imObjectImage_02_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_2" class="" > <div id="imFooter_imCellStyleGraphics_2"></div><div id="imFooter_imCellStyle_2" ><img id="imFooter_imObjectImage_02" src="images/Grey_no.circle_position.png" title="" alt="" /></div></div></div><div id="imFooter_imTextObject_03_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_3" class="" > <div id="imFooter_imCellStyleGraphics_3"></div><div id="imFooter_imCellStyle_3" ><div id="imFooter_imTextObject_03">
	<div class="text-tab-content"  id="imFooter_imTextObject_03_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs8"><b>Jl. Pemuda</b> / </span><span class="fs8">Gang 18</span></div><div style="text-align: center;"><span class="fs8">Rawamangun / &nbsp;</span><span class="fs8">(Peldrum)</span></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_imObjectImage_04_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_4" class="" > <div id="imFooter_imCellStyleGraphics_4"></div><div id="imFooter_imCellStyle_4" ><img id="imFooter_imObjectImage_04" src="images/Grey_no.circle_phone.png" title="" alt="" /></div></div></div><div id="imFooter_imTextObject_05_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_5" class="" > <div id="imFooter_imCellStyleGraphics_5"></div><div id="imFooter_imCellStyle_5" ><div id="imFooter_imTextObject_05">
	<div class="text-tab-content"  id="imFooter_imTextObject_05_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs8">0857 8252 4626 - Doni</span></div><div style="text-align: center;"><span class="fs8">0856 9338 0123 - Dedi</span></div><div style="text-align: center;"><span class="fs8">0896 5318 0412 - Syarif</span></div><div style="text-align: center;"><span class="fs8">0812 9793 2759 - Fauzi</span></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_imObjectImage_06_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_6" class="" > <div id="imFooter_imCellStyleGraphics_6"></div><div id="imFooter_imCellStyle_6" ><img id="imFooter_imObjectImage_06" src="images/Grey_no.circle_mail.png" title="" alt="" /></div></div></div><div id="imFooter_imTextObject_07_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_7" class="" > <div id="imFooter_imCellStyleGraphics_7"></div><div id="imFooter_imCellStyle_7" ><div id="imFooter_imTextObject_07">
	<div class="text-tab-content"  id="imFooter_imTextObject_07_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><div><b><span class="fs8">StmikMJ@example.com</span></b></div><div><div><span class="fs8">StmikMJ@example.com</span></div></div></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_imObjectImage_08_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_8" class="" > <div id="imFooter_imCellStyleGraphics_8"></div><div id="imFooter_imCellStyle_8" ><img id="imFooter_imObjectImage_08" src="images/bg_60_white.png" title="" alt="" /></div></div></div></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a> | <a href="#imGoToMenu" title="Remain on this page">Back to main menu</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>

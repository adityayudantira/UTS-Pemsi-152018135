<!DOCTYPE html>
<html style="font-size: 16px;"><html>
	<head>
	<title>Simulasi Penjualan Velg dengan MonteCarlo</title>
    <link href="logo.png" rel="icon">
		
		<link rel="stylesheet" href="css/custom.css">
	  	<link rel="stylesheet" href="css/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="img/favicon.ico">
	  	<script src="js/jquery.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
		<link href="css/custom.css" rel="stylesheet">
			

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<meta name="keywords" content="​Mountain Retreat Resort">
		<meta name="description" content="">
		<meta name="page_type" content="np-template-header-footer-from-plugin">
		<title>Home 1</title>
		<link rel="stylesheet" href="nicepage.css" media="screen">
		<link rel="stylesheet" href="Home-1.css" media="screen">
		<script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
		<script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
		<meta name="generator" content="Nicepage 4.8.2, nicepage.com">
		<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
		<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme:400">
		
		
		<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
		}</script>
		<meta name="theme-color" content="#478ac9">
		<meta property="og:title" content="Home 1">
		<meta property="og:type" content="website">
	</head>

	
	<body class="u-body u-xl-mode">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				</div>
			</div>
		</nav>
			<?php
				error_reporting(E_ERROR);

				$demand = $_POST['demand'];
				$freq = $_POST['freq'];
				$total = 0;
				$biaya = $_POST['biaya'];
				$penjualan = $_POST['penjualan'];
				$banyak = $_POST['banyak'];
				$probability[-1] = 0;
				$amount = count($freq);
				$botInterval = [];
				$topInterval = [];

				//menghitung total frekuensi permintaan
				for($i=0;$i<count($freq);$i++){
					$total = $total + $freq[$i];
				}

				//menghitung peluang/kemungkinan terjadinya permintaan
				for($i=0;$i<count($freq);$i++){
					$probability[$i] = round($freq[$i]/$total,3);
					$cumulative[$i] =  round($cumulative[$i-1] + $probability[$i],3);
				}

				//menghitung panjang angka dibelakang koma
				$length = 0;
				for($i=0;$i<count($freq);$i++){
					if($length < strlen($cumulative[$i])){
						$length = strlen($cumulative[$i]) - 2;
					}
				}

				//menghitung interfal paling bawah
				$lowestInterval = 1;
				for($j=0;$j<$length;$j++){
					$lowestInterval = $lowestInterval/10;
				}

				$lowestInterval = round($lowestInterval,3);

				//menentukan interval bawah dan atas pertama
				$botInterval[0] = $lowestInterval;
				$topInterval[0] = $cumulative[0];

				//menentukan interval bawah dan atas
				for($i=1;$i<count($freq);$i++){
					$botInterval[$i] = round($topInterval[$i-1] + $lowestInterval,3);
					$topInterval[$i] = round($cumulative[$i],3);
				}

				//menghitung untuk perkalian desimal agar bisa digunakan untuk interval bilangan acak
				$pangkat = 1;
				for($j=0;$j<$length;$j++){
					$pangkat = $pangkat * 10;
				}

			?>

		<!-- Container -->
	<section class="u-align-center u-clearfix u-image u-shading u-section-1" id="carousel_790c" data-image-width="1300" data-image-height="1023">
		<div class="container" style="color: black;">
			<div class="panel panel-primary">
				<div class="panel-heading">Tabel Distribusi</div>
				<div class="panel-body">
					<div class="input-group">
					  <h1><center>Tahap 2</center></h1>
					  <p><center>Data Permintaan sesuai dengan distribusi</center></p>
					  <div class="table table-responsive">
						<table class="table table-hover custom-table-header" >
						  <tr>
							  <th style="text-align: center; color: blue;">Permintaan</th>
							  <th style="text-align: center; color: blue;">Kemungkinan Terjadi</th>
							  <th style="text-align: center; color: blue;">Kemungkinan Kumulatif</th>
							  <th style="text-align: center; color: blue;">Interval Bilangan Acak</th>
						  </tr>
						<?php for($i=0; $i<count($freq); $i++): ?>
							<tr>
								<td> <?php echo $demand[$i]; ?> </td>
								<td> <?php echo $probability[$i]; ?> </td>
								<td> <?php echo $cumulative[$i]; ?> </td>
								<td>
									<?php
										echo $botInterval[$i]." - ";
										echo $topInterval[$i]."<br>";
									?>
								</td>
							</tr>
						<?php endfor; ?>
						</table>
					  </div>
					</div>
					<div class="input-group">
						<form action="hasil_simulasi.php" method="post">
							<table class="custom-padding-table">
								<tr>
									<td>Masukan jumlah simulasi <?php echo $banyak; ?></td>
									<td>:</td>
									<td><input type="number" min="1" class="form-control" name="jmlRandom" required="" oninvalid="this.setCustomValidity('Harap isi jumlah simulasi !')" oninput="setCustomValidity('')"></td>
									<td width="50px"></td>
									<td></td>
									<td>Rumus angka random LCM :</td>
								</tr>
								<tr>
									<td>Masukan X0</td>
									<td>:</td>
									<td><input type="number" min="1" class="form-control" name="x0" required="" oninvalid="this.setCustomValidity('Harap isi nilai X0 !')" oninput="setCustomValidity('')"></td>
									<td width="350px"></td>
									<td></td>
									<td> Xi+1 = (a Xi + c) mod m </td>
								</tr>
								<tr>
									<td>Masukan a</td>
									<td>:</td>
									<td><input type="number" min="1" class="form-control" name="a" required="" oninvalid="this.setCustomValidity('Harap isi nilai a !')" oninput="setCustomValidity('')"></td>
									<td width="350px"></td>
									<td></td>
									<td> Dengan syarat nilai : </td>
								</tr>
								<tr>
									<td>Masukan c</td>
									<td>:</td>
									<td><input type="number" min="1" class="form-control" name="c" required="" oninvalid="this.setCustomValidity('Harap isi nilai c !')" oninput="setCustomValidity('')"></td>
									<td width="350px"></td>
									<td></td>
									<td>a < m , c < m , X0 < m</td>
								</tr>
								<tr>
									<td>Masukan m</td>
									<td>:</td>
									<td><input type="number" min="1" class="form-control" name="m" required="" oninvalid="this.setCustomValidity('Harap isi nilai m !')" oninput="setCustomValidity('')"></td>
									<td width="350px"></td>
									<td></td>
									<td>m > 0 </td>
								</tr>
									<input type="hidden" value="<?php echo $pangkat; ?>" name="pangkat">
									<input type="hidden" value="<?php echo $biaya; ?>" name="biaya">
									<input type="hidden" value="<?php echo $penjualan; ?>" name="penjualan">
									<input type="hidden" value="<?php echo $banyak; ?>" name="banyak">
									<input type="hidden" value="<?php echo $amount; ?>" name="amount">
									<input type="hidden" value="<?php echo $lowestInterval; ?>" name="lowestInterval">
									<input type="hidden" value="<?php echo print base64_encode(serialize($demand)); ?>" name="demand">
									<input type="hidden" value="<?php print base64_encode(serialize($botInterval)); ?>" name="botInterval">
									<input type="hidden" value="<?php print base64_encode(serialize($topInterval)); ?>" name="topInterval">
									<tr>
										<td colspan="2" align="center"><input type="submit" class="btn btn-success" value="Run" style="padding-left: 30px; padding-right: 30px;"></td>
									</tr>
									
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

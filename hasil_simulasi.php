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

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
	</head>

	<body>
	<section class="u-align-center u-clearfix u-image u-shading u-section-1" id="carousel_790c" data-image-width="1300" data-image-height="1023">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			</div>
		</div>
	</nav>
	<div class="container">

		<?php
			$jmlRandom = $_POST['jmlRandom'];
			$x0 = $_POST['x0'];
			$a = $_POST['a'];
			$c = $_POST['c'];
			$m = $_POST['m'];
			$biaya = $_POST['biaya'];
			$penjualan = $_POST['penjualan'];
			$angka_random = [];
			$hasil = [];
			$hasil[0] = $x0;
			$pangkat = $_POST['pangkat'];
			$amount = $_POST['amount'];
			$lowestInterval = $_POST['lowestInterval'];
			$dem = $_POST['demand'];
			$demand = unserialize(base64_decode($dem));
			$botInt = $_POST['botInterval'];
			$botInterval = unserialize(base64_decode($botInt));
			$topInt = $_POST['topInterval'];
			$topInterval = unserialize(base64_decode($topInt));
			$demandResult;
		?>
		<div class="panel panel-primary">
			<div class="panel-heading">Hasil Perhitungan</div>
			<div class="panel-body">
				<div class="input-group" style="color: black;">
				  <h1><center>Hasil Akhir</center></h1>
				  <p><center>Bilangan acak didapatkan dari metode Linear Congruent Method (LCM)</center></p>
				  <div class="custom__table table-responsive">
					<table class="table table-hover custom-table-header">
						  <tr>
							  <th>Minggu</th>
							  <th>Bilangan Acak</th>
							  <th>Permintaan</th>
						  </tr>
						<?php for($i=0; $i<$jmlRandom; $i++): ?>
						  <tr>
							  <td> <?php
									echo $i+1; ?>
							  </td>
							  <td>
								<?php
									//proses random dengan metode LCM
									$hasil[$i+1] = ($a*$hasil[$i] + $c) % $m;

									$angka_random[$i] = round($hasil[$i+1]/$m, 5);
									echo $angka_random[$i]."<br>";
								?>
							  </td>
							  <td>
								<?php
									for($j=0;$j<$amount;$j++){
										if($angka_random[$i] >= $botInterval[$j] && $angka_random[$i] <= $topInterval[$j]){
											$demandResult[$i] = $demand[$j];
											echo $demandResult[$i];
										}
									}
								?>
							  </td>
						  </tr>
						<?php endfor; ?>
					</table>
					<?php
						$total=0;
						for($i=0; $i<$jmlRandom; $i++):
							$total=$total+$demandResult[$i];
						endfor;

						$average = $total / $jmlRandom;
					?>
					<h4><center>Jumlah permintaan dari <?php echo $i; ?> minggu adalah : <b><?php echo $total; ?> permintaan</b></center></h4><br/>
					<h4><center>Rata-rata jumlah permintaan adalah : <b><?php echo $average; ?> permintaan</b></center></h4><br/>

					<div class="container">
           				 <canvas id="myChart" width="100" height="100"></canvas>
        			</div>
					<script>
						var ctx = document.getElementById("myChart");
						var myChart = new Chart(ctx, {
							type: 'line',
							data: {
								labels: [<?php for($i=0; $i<=$jmlRandom;) { echo '"' .$i++ .'",';} ?> ],
								datasets: [{
										label: '# Permintaan',
										data: [<?php for($i=0; $i<$jmlRandom; $i++){
										if($angka_random[$i] >= $botInterval[$j] && $angka_random[$i] <= $topInterval[$j]){
											$demandResult[$i] = $demand[$j];}
			
										 
										 echo '"' .$demandResult[$i].'",' ;}?>],
										borderColor: [
											'rgba(255,99,132,1)',
											'rgba(54, 162, 235, 1)',
											'rgba(255, 206, 86, 1)',
											'rgba(75, 192, 192, 1)',
											'rgba(153, 102, 255, 1)',
											'rgba(255, 159, 64, 1)'
										],
										borderWidth: 1
									}]
							},
							options: {
								scales: {
									yAxes: [{
											ticks: {
												beginAtZero: true
											}
										}]
								}
							}
						});
					</script>

				<!-- Hitung Keuntungan
					<center>
					<form action="hitung_keuntungan.php" method="post">
						<table>
							<input type="hidden" value="<?php echo print base64_encode(serialize($demand)); ?>" name="demand">
							<input type="hidden" value="<?php echo print base64_encode(serialize($demandResult)); ?>" name="demandRes">
							<input type="hidden" value="<?php echo $amount; ?>" name="banyak">
							<input type="hidden" value="<?php echo $penjualan; ?>" name="penjualan">
							<input type="hidden" value="<?php echo $biaya; ?>" name="biaya">
							<input type="hidden" value="<?php echo $demandResult; ?>" name="demandResult">
							<input type="hidden" value="<?php echo $jmlRandom; ?>" name="jmlRandom">
							<tr>
								<td><input type="submit" class="btn btn-info" value="Prediksi Keuntungan" style="padding-left: 30px; padding-right: 30px;"></td>
							</tr>
						</table>
					</form>
					</center><br/> -->
					<center><a href="prediksi_permintaan.php">Kembali Ke Awal</a></center>
				  </div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>
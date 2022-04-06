<!DOCTYPE html>
<html style="font-size: 16px;">
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
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="carousel_790c" data-image-width="1300" data-image-height="1023">
     
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
          </div>
        </div>
      </nav>
    
      <div class="container">
        <div class="panel panel-primary">

          <!-- Deskripsi Program -->
          <div class="panel-heading">Keterangan</div>
            <div class="panel-body">
              <!-- Tombol-tombol deskripsi -->
              <ul class="nav nav-tabs">
                   <li class="active"><a data-toggle="tab" href="#kasus">Studi Kasus</a></li>
                   <li><a data-toggle="tab" href="#penggunaan">Penggunaan Simulasi Monte Carlo</a></li>
                   <li><a data-toggle="tab" href="#langkah">Langkah-langkah Simulasi Monte Carlo</a></li>
                   <li><a data-toggle="tab" href="#metode">Metode</a></li>
                   <li><a data-toggle="tab" href="#tentang">Tentang</a></li>
              </ul>
                   <!-- Deskripsi (Text) -->
                   <div class="tab-content" style="color: black;">
                       <div id="kasus" class="tab-pane fade in active" style="padding-top: 20px;">
                    <p>Manajer HSR Wheel sedang memutuskan berapa jumlah velg dengan ukuran ring 17 yang harus dipesan setiap minggu. </p>
                    <p>Salah satu pertimbangan utama dalam keputusan utama manajer tersebut adalah jumlah permintaan setiap minggunya. </p>
                    <p> Ketentuan yang dibuat oleh manajer adalah :</p>
                    <ul>
                      <p> 
                        Velg dengan ukuran ring 17 dijual dengan harga Rp 4.500.000,-. 
                      </p>
                      <p>
                        Jumlah permintaan velg 	merupakan variable acak (dianggap sebagai X) yang berkisar mulai dari 1 pasang sampai 5 pasang setiap minggu.	
                      </p>	
                      <p>
                        Dari catatan yang tersedia, manajer telah menetapkan frekuensi permintaan velg untuk 2 tahun atau 96 minggu terakhir dan data itu adalah sebagai berikut.
                      </p>
                    </ul>
                    <p> <a href="prediksi_permintaan.php" class="btn btn-primary custom__btn__result" style="color: rgb(40, 94, 119);">Mulai Simulasi Penjualan Velg dengan Monte Carlo</a></p>
                    </div>
                      <div id="penggunaan" class="tab-pane fade" style="padding-top: 20px;">
                        <p>Penggunaan Simulasi Monte Carlo adalah sebagai berikut :</p>
                        <ul>
                          <p>
                            Merupakan simulasi yang bersifat probabilistik, dimana suatu solusi dari suatu masalah diberikan berdasarkan proses randomisasi
                          </p>
                          <p>
                            Metode yang digunakan untuk memodelkan dan menganalisa sistem yang mengandung unsur resiko dan ketidakpastian.
                          </p>
                        </ul>
                      </div>
                      <div id="langkah" class="tab-pane fade" style="padding-top: 20px;">
                    <p>Langkah-langkah Simulasi Monte Carlo adalah sebagai berikut :</p>
                      <ol>
                        <p>
                          Menetapkan atau menentukan distribusi probabilitas untuk variable-variable penting
                        </p>
                        <p>
                          Menghitung distribusi kumulatif untuk setiap variable pada langkah pertama.
                        </p> 
                        <p>
                          Menetapkan suatu interval dari angka acak untuk masing-masing variable
                        </p>
                        <p>
                          Bentuk dan pilih angka acak
                        </p>
                        <p>
                          Nyatakan barisan simulasi dari beberapa percoban-percobaan
                        </p>
                      </ol>
                      </div>
                    <div id="metode" class="tab-pane fade" style="padding-top: 20px;">
                        <p><b>Linear Congruent Method (LCM)</b></p>
                        <p>Pada Simulasi Penjualan Velg dengan Monte Carlo ini, program ini menggunakan metode Linear Congruential Method. Linear Congruent Method (LCM) merupakan metode pembangkitkan bilangan acak yang banyak digunakan dalam program komputer. LCM memanfaatkan model linier untuk membangkitkan bilangan acak. Untuk menghasilkan urutan bilangan bulat X1, X2, ... antara 0 dan m -1 dengan mengikuti hubungan rekursif:</p>
                          <pre><b> Xi+1 = (aXi+c) mod m,   i=0,1,2...</b></pre>
                          <p> Di mana :
                            <ul> 
                              <p>Xi = adalah bilangan acak ke i</p>
                              <p>a dan c adalah konstanta LCM</p>
                              <p>m adalah batas maksimum bilangan acak</p>
                            </ul>
                          </p>
                          <hr/>
                        <p> Asumsikan: m > 0 dan a < m, c < m, X0 < m. Pemilihan nilai untuk a, c, m, dan X0 secara drastis mempengaruhi sifat statistik dan panjang siklus. Bilangan bulat acak Xi dihasilkan pada [0, m -1]. Kemudian mengkonversi bilangan bulat Xi menjadi bilangan acak</p>
                        <p> Ketentuan-ketentuan pemilihan setiap parameter pada persamaan di atas adalah sebagai berikut : 
                          <ol>
                            <p>m = modulus, 0 < m</p>
                            <p>a = multiplier (pengganda), 0 < a < m</p>
                            <p>c = Increment (pertambahan nilai), 0 = c < m</p>
                            <p>X0 = nilai awal, 0 = X0 < m</p>
                            <p>c dan m merupakan bilangan prima relatif</p>
                            <p>a – 1 dapat dibagi oleh faktor prima dari m</p>
                            <p>a – 1 merupakan kelipatan 4 jika m juga kelipatan 4</p>
                            <p>a harus sangat besar</p>
                          </ol>
                        </p>
                        <p>Ciri khas dari LCM adalah terjadi pengulangan pada periode waktu tertentu atau setelah sekian kali pembangkitan, hal ini adalah salah satu sifat dari metode ini, dan pseudo random generator pada umumnya. Penentuan konstanta LCM (a, c dan m) sangat menentukan baik tidaknya bilangan acak yang diperoleh dalam arti memperoleh bilangan acak yang seakan-akan tidak terjadi pengulangan.</p>
                        <p><b>LCG memiliki periode penuh jika dan hanya jika tiga kondisi berikut bertahan (Hull dan Dobell, 1962):</b> 
                          <ol>
                            <p>Satu-satunya bilangan bulat positif yang (persis) membagi kedua m dan c adalah 1</p>
                            <p>Jika q adalah bilangan prima yang membagi m, maka q membagi a-1</p>
                            <p>Jika 4 membagi m, maka 4 membagi a-1</p>
                          </ol>
                        </p>
                      </div>
                    <div id="tentang" class="tab-pane fade" style="padding-top: 10px;">
                      <p><b>Dibuat Oleh :</p>
                      <p>Aditya Muhammad Yudantira</p>
                      <p>152018135</p>
                      <p>Ditujukan sebagai tugas UTS Mata Kuliah Pemrogramman Simulasi</p>
                      </div>
                 </div>
               </div>
             </div>
      <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
      
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-ad58"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Simulasi Penjualan Velg dengan Menggunakan Metode Monte Carlo</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link">
        
      </a>
      <p class="u-text">
        
      </p>
      
      </a>
    </section>
  </body>
</html>
<?php 
require 'functions.php';
?>

<?php

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sholat UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

<div class="container">
  <h2>Jadwal Sholat untuk daerah Kota 
  <?php if (($_POST['kota']) == 1) {echo "Malang";} 
        elseif (($_POST['kota']) == 2) {echo "Surabaya";}
        else {echo "Denpasar";}
        ?>
   dan sekitarnya</h2>
  <p>Jadwal ini menggunakan algoritma Jean Meuss dengan parameter Asar menurut Imam 
     <?php if (($_POST['imam']) == 2) {echo "Hanafi";}
           else{echo "Syafi'i";}
           ?>.
  </p> 
  <p>Tabel di bawah ini dapat dijadikan referensi dengan waktu toleransi 5 menit.</p>         
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Hari</th>
        <th>Tanggal</th>
        <th>Subuh</th>
        <th>Terbit</th>
        <th>Dhuhur</th>
        <th>Asar</th>
        <th>Maghrib</th>
        <th>Isya</th>
      </tr>
    </thead>
    <tbody>
    
<?php
	if(isset($_POST['submit'])) {
		$lama = $_POST['lama'];
		$tba = $_POST['imam'];
		if ($_POST['kota'] == 1) { $kota = $malang;}
		elseif ($_POST['kota'] == 2) { $kota = $surabaya;}
		else { $kota = $denpasar;}
	} else {
		$lama = 1;
		$kota = $malang;
		$tba = 1;
	}

	for ($x = 1; $x <= $lama; $x++) {
	    $sholatku = waktu($jd, $kota, $c_dhuhur, $tba);
	    $sj = sprintf("%02d", floor($sholatku['subuh']));
	    $sm = $sholatku['subuh'] - floor($sholatku['subuh']);
	    $sm = sprintf("%02d", floor($sm * 60));
	    
	    $tj = sprintf("%02d", floor($sholatku['terbit']));
	    $tm = $sholatku['terbit'] - floor($sholatku['terbit']);
	    $tm = sprintf("%02d", floor($tm * 60));
	    
	    $dj = sprintf("%02d", floor($sholatku['dhuhur']));
	    $dm = $sholatku['dhuhur'] - floor($sholatku['dhuhur']);
	    $dm = sprintf("%02d", floor($dm * 60));
	    
	    $aj = sprintf("%02d", floor($sholatku['ashar']));
	    $am = $sholatku['ashar'] - floor($sholatku['ashar']);
	    $am = sprintf("%02d", floor($am * 60));
	    
	    $mj = sprintf("%02d", floor($sholatku['maghrib']));
	    $mm = $sholatku['maghrib'] - floor($sholatku['maghrib']);
	    $mm = sprintf("%02d", floor($mm * 60));
	    
	    $ij = sprintf("%02d", floor($sholatku['isya']));
	    $im = $sholatku['isya'] - floor($sholatku['isya']);
	    $im = sprintf("%02d", ceil($im * 60));
	    
	    echo "<tr>";
	    echo "<td>" . $x . "</td>";
	    echo "<td>" .  $hari[($jd) % 7] . "</td>";
	    echo "<td>" .  jdtogregorian($jd) . "</td>";
	    echo "<td>" . $sj . ":" . $sm . "</td>";
	    echo "<td>" . $tj . ":" . $tm . "</td>";
	    echo "<td>" . $dj . ":" . $dm . "</td>";
	    echo "<td>" . $aj . ":" . $am . "</td>";
	    echo "<td>" . $mj . ":" . $mm . "</td>";
	    echo "<td>" . $ij . ":" . $im . "</td>";
	    echo "</tr>";
	    $jd = $jd + 1;
	} 
?>  
    

    </tbody>
  </table>
</div>
		
</body>
<footer>
  <div class="container">
    <p>Versi 0.1 &copy; 2016 <a href="">Nur Waqid Muhsinin</a></p> 
  </div>
</footer>
</html>
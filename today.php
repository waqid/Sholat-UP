<!-- Work -->
			<div class="wrapper style2">
				<article >
					<header>
						<h2 >Jadwal Sholat untuk hari <?php echo $hari[($jd) % 7] . ", " . date("j") . " " . $bulan[date('m')] . " " . date("Y") ;?> 
</h2>
						
					</header>
					<div class="container" >
						<div class="row" id="work">
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<h3>Subuh</h3>
									<h1>
<?php
	$jj = sprintf("%02d", floor($test_point['subuh']));
	$mm = $test_point['subuh'] - floor($test_point['subuh']);
	$mm = sprintf("%02d", ceil($mm * 60));
	echo $jj . ":" . $mm;
?>
									</h1>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<h3>Terbit</h3>
									<h1>
<?php
	$jj = sprintf("%02d", floor($test_point['terbit']));
	$mm = $test_point['terbit'] - floor($test_point['terbit']);
	$mm = sprintf("%02d", floor($mm * 60));
	echo $jj . ":" . $mm;
?>
									</h1>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<h3>Dhuhur</h3>
									<h1>
<?php
	$jj = sprintf("%02d", floor($test_point['dhuhur']));
	$mm = $test_point['dhuhur'] - floor($test_point['dhuhur']);
	$mm = sprintf("%02d", ceil($mm * 60));
	echo $jj . ":" . $mm;
?>
									</h1>
								</section>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<h3>ashar</h3>
									<h1>
<?php
	$jj = sprintf("%02d", floor($test_point['ashar']));
	$mm = $test_point['ashar'] - floor($test_point['ashar']);
	$mm = sprintf("%02d", ceil($mm * 60));
	echo $jj . ":" . $mm;
?>
									</h1>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<h3>Maghrib</h3>
									<h1>
<?php
	$jj = sprintf("%02d", floor($test_point['maghrib']));
	$mm = $test_point['maghrib'] - floor($test_point['maghrib']);
	$mm = sprintf("%02d", ceil($mm * 60));
	echo $jj . ":" . $mm;
?>
									</h1>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<h3>Isya'</h3>
									<h1>
<?php
	$jj = sprintf("%02d", floor($test_point['isya']));
	$mm = $test_point['isya'] - floor($test_point['isya']);
	$mm = sprintf("%02d", ceil($mm * 60));
	echo $jj . ":" . $mm;
?>
									</h1>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p>Ralat waktu sholat &plusmn; 2 menit.</p>

					</footer>
				</article>
			</div>
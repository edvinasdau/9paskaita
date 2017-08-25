<?php
	
	function getPrice($cost) {
		$price = $cost * 2 * 1.21 + 5; //arba return $cost * 2 * 1.21 + 5; tas pats
		return $price;
	}

	function getVolume($ilgis, $plotis, $aukstis) {

		$turis = round($ilgis * $plotis * $aukstis);
		return $turis;
	}

	function getArea($ilgis, $plotis, $aukstis) { 

		$vidpl = 2 * $ilgis * $aukstis + 2* $plotis * $aukstis + $ilgis * $plotis;
		return $vidpl;
	}

	function getTiles($area, $ta = 0.25) {
		$ps = ($area / $ta);
		return ceil($ps);
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>9 Paskaita (PHP)</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>9 Paskaita (PHP)</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
					echo "Prekes Kaina yra " . getPrice(50) . " Eur";
				?><br/>
				<?php
					echo "Baseino turis " . getVolume(7, 8 , 4.1561) ;
				?><br/>
				<?php
					echo "Baseino vidaus plotas " . getArea(7, 8 , 4.1561) ;
				?><br/>
				<?php
					echo "Plyteliu skaicius " . getTiles(8.1547) ;
				?>
			</div>
			<div class="col">Desine</div>
		</div>
	</div>
</body>
</html>
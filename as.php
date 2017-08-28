<?php

	$t= 150;

	function getTrucks($talpa) {
		global $t;
		$trucks = $t / $talpa;
		return $trucks;
	}
	echo getTrucks(10);
 
?>
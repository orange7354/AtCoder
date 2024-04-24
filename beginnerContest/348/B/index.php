<?php

fscanf(STDIN, "%d", $n);

$cords = [];
for($i = 0; $i < $n; $i++) {
	fscanf(STDIN, "%d %d", $x, $y);

	$cords[] = [$x, $y];
}

for($i = 0; $i < $n; $i++) {
	$distance_max = 0;
	$distance_max_point = -1;
	for($j = 0; $j < $n; $j++) {
		$distance = sqrt(pow($cords[$i][0] - $cords[$j][0], 2) + pow($cords[$i][1] - $cords[$j][1], 2));
		if($distance > $distance_max) {
			$distance_max = $distance;
			$distance_max_point = $j + 1;
		}
	}
	echo $distance_max_point . PHP_EOL;
}
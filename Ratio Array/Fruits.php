<?php

declare(strict_types=1);

function shuffler(array $array): array {
	$shuffledArray = array();
	foreach ($array as $key => $element) {
		for ($i = 0; $i < $element; $i++) {
			array_push($shuffledArray, $key);
		}
	}
	shuffle($shuffledArray);

	return $shuffledArray;
}

print_r(shuffler([
	"Chuối" => 1,
	"Mít" => 2,
	"Xoài" => 3
]));

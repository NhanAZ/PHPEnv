<?php

declare(strict_types=1);

function checker(string $phone): bool {
	if (preg_match('/^0[0-9]{9}$/', $phone)) {
		return true;
	} else {
		return false;
	}
}

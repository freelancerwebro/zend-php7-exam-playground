<?php

// works on PHP 7+ only 
//

declare(strict_types=1);

$a = 10;
$b = 22;

function calculateSum(int $a, int $b): int{
	return $a + $b;
}

print_r(calculateSum($a, $b));




$x = "Hello";
$y = "World";

function displayHelloWorld(string $x, string $y): string{
	return $x.$y;
}

print_r(displayHelloWorld($x, $y));




$x = 1;
$y = "World";

function displayOneWorld(string $x, string $y): string{
	return $x.$y;
}

// PHP Fatal error:  Uncaught TypeError: Argument 1 passed to displayOneWorld() must be of the type string, integer given
print_r(displayOneWorld($x, $y));


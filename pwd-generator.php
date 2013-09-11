<?php

/*
 * Password generator. By http://andres.jaimes.net/
 *
 * The function returns a random password in a string format.
 */
function random_password() {
	$a = "BDFJKLMNPRSTYZ";
	$b = "aeiou";
	$c = "abdefilorsuz";
	$d = "acdefgijlrsuxz";
	$e = "0123456789";

	$pwd = '';

	$n = rand(0, strlen($a) - 1);
	$pwd = $a[$n];

	$n = rand(0, strlen($b) - 1);
	$pwd .= $b[$n];

	$n = rand(0, strlen($c) - 1);
	$pwd .= $c[$n];

	$n = rand(0, strlen($d) - 1);
	$pwd .= $d[$n];

	for ($i = 0; $i < 4; $i++) {
		$n = rand(0, strlen($e) - 1);
		$pwd .= $e[$n];
	}

	return $pwd;
}

?>

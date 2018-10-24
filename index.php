<?php
/*
 *	Write a function that splits strings into an array by delimiter
 **/
$delimiter = ",";
$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

function string_to_array($string, $delimiter = " ") {
	$word = "";
	$j = 0;
	$cnt = strlen($string);

	for ($i=0; $i < $cnt; $i++) {
		if ($string{$i} != $delimiter) {
			$word .= $string{$i};
		}else{
			$arr[$j] = $word;
			$word = "";
			$j++;
		}
	}
	$arr[$j] = $word;
	$word = "";

	echo "<pre>";
		print_r($arr);
	echo "</pre>";
}

string_to_array($string);
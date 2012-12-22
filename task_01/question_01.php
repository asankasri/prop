<?php
/**
 * ======================
 * Task 01 - Question 01:
 * ======================
 * Write a script that accepts a positive integer range and, for each increment in the range, prints:
 * - "Fizz" if a multiple of 3
 * - "Buzz" if a multiple of 5
 * - The integer itself otherwise.
 * E.g. for f[12..16], the output is "Fizz 13 14 FizzBuzz 16".
 */

$inputArr = array(12, 13, 14, 15, 16);
getGeneratedStr($inputArr);

function getGeneratedStr($inputArr) {
	
	$outputStr = '';
	foreach($inputArr as $val) {
		echo "$val ";
	}
	
	$outputStr = trim($outputStr);
	return  $outputStr;
}
?>
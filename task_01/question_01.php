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
echo getGeneratedStr($inputArr);

/**
 * Generated the string according to the Task 01 - Question 01
 * Assumption: All the input array elements are positive elements.
 *
 * @param array $inputArr positive integer set
 * @return string $outputStr Generated string 
 */
function getGeneratedStr($inputArr) {
	
	$outputStr = '';
	foreach($inputArr as $val) {
		$outputStr.= getFizzBuzz($val) . ' '; // get the generated value (Fizz, Buzz or the original value)
	}
	
	$outputStr = trim($outputStr); // trim the string
	return  $outputStr;
}

/**
 * Get the generated value for a given value
 * Used in: getGeneratedStr()
 * Assumption: Given value is an positive integer.
 *
 * @param integer $value
 * @return string/integer
 */
function getFizzBuzz($value) {
	
	$modThree = $value%3;
	$modFive = $value%5;
	return (($modThree == 0 || $modFive == 0) ? (($modThree == 0 ? 'Fizz' : '') . ($modFive == 0 ? 'Buzz' : '') ) : $value);
}
?>
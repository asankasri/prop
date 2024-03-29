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
 * 
 * -------------------------------------------------------------------------------
 * NOTE: OOP is not used here since this is just a try to implement the algorithm.
 * -------------------------------------------------------------------------------
 */

$inputArr = array(12, 13, 14, 15, 16);
//$inputArr = array(3, 6, 9, 12, 15, 18, 21, 24, 27, 30);
echo getGeneratedStr($inputArr);

/**
 * Generated the string according to the Task 01 - Question 01
 * Assumption: All the input array elements are positive elements.
 *
 * @param array $inputArr positive integer set
 * @return string $outputStr Generated string 
 */
function getGeneratedStr($inputArr) {
	
	$outputArr = array();
	foreach($inputArr as $val) {
		$outputArr[] = getFizzBuzz($val); // get the generated value (Fizz, Buzz or the original value)
	}
	
	return implode(' ', $outputArr);
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
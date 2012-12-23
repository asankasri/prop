<?php
/**
 * ======================
 * Task 01 - Question 02:
 * ======================
 * Do the same as question 1, except in addition to the previous rules, now it prints "Bazz" instead of an integer after consecutive Fizzes/Buzzes
 * 
 * -------------------------------------------------------------------------------
 * NOTE: OOP is not used here since this is just a try to implement the algorithm.
 * -------------------------------------------------------------------------------
 */

$fizz = 'Fizz';
$buzz = 'Buzz';
$bazz = 'Bazz';

$inputArr = array(4, 5, 6, 7, 8, 9, 10, 11);
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
	foreach($inputArr as $key=>$val) {
		
		if ($key > 1 && checkPreviousFizzBuzz($outputArr[$key-1], $outputArr[$key-2] ))
			$outputArr[$key] = $GLOBALS['bazz']; // if the previous two values are either Fizz or Buzz, assign Bazz
		else
			$outputArr[$key] = getFizzBuzz($val); // get the generated value (Fizz, Buzz or the original value)
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
	
	$modThree = $value % 3;
	$modFive = $value % 5;
	return (($modThree == 0 || $modFive == 0) ? (($modThree == 0 ? $GLOBALS['fizz'] : '') . ($modFive == 0 ? $GLOBALS['buzz'] : '')) : $value);
}

/**
 * Check the given both values are exactly devided by 3 or 5
 * Used in: getGeneratedStr()
 * Assumption: Given values are positive integers.
 *
 * @param integer $val1
 * @param integer $val2
 * @return boolean
 */
function checkPreviousFizzBuzz($val1, $val2) {
	
	return (in_array($val1, array($GLOBALS['fizz'], $GLOBALS['buzz'], $GLOBALS['fizz'].$GLOBALS['buzz'])) && in_array($val2, array($GLOBALS['fizz'], $GLOBALS['buzz'], $GLOBALS['fizz'].$GLOBALS['buzz'])));
}
?>
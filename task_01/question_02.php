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

$inputArr = array(4, 5, 6, 7, 8, 9, 10, 11);
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
	foreach($inputArr as $key=>$val) {
		
		if ($key > 1 && checkPreviousFizzBuzz($inputArr [$key-1], $inputArr [$key-2] ))
			$outputStr .= "Bazz"; // if the previous two values are either Fizz or Buzz, assign Bazz
		else
			$outputStr .= getFizzBuzz($val); // get the generated value (Fizz, Buzz or the original value)
		
		$outputStr.= ' ';
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
	
	$modThree = $value % 3;
	$modFive = $value % 5;
	return (($modThree == 0 || $modFive == 0) ? (($modThree == 0 ? 'Fizz' : '') . ($modFive == 0 ? 'Buzz' : '')) : $value);
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
	
	return (($val1 % 3 == 0 || $val1 % 5 == 0) && ($val2 % 3 == 0 || $val2 % 5 == 0));
}
?>
<?php


/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 *
 * Input:
 * 5
 * 1000000001 1000000002 1000000003 1000000004 1000000005
 *
 * Output:
 * 5000000015
 *
 *
 */

function aVeryBigSum($ar) {
  return  array_sum($ar);
}

$fptr = fopen(__DIR__."/compare.txt", "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);

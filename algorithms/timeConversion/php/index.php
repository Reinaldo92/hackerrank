<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 *
 * Sample Input:
 * 07:05:45PM
 *
 * Sample Output:
 * 19:05:45
 *
 */

function timeConversion($s)
{
    $timeInput = strtotime($s);

    return date('H:i:s', $timeInput);
}

// $fptr = fopen(getenv("OUTPUT_PATH"), "w");

// $s = rtrim(fgets(STDIN), "\r\n");

$s = "07:05:45PM";

$result = timeConversion($s);

print_r($result);

// fwrite($fptr, $result . "\n");

// fclose($fptr);

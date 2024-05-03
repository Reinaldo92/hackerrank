<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 *
 * Input: 1 2 3 4 5
 *
 *
 * Outout: 10 14
 *
 *
 */

function miniMaxSum($arr)
{
    $arrLength = count($arr);
    sort($arr);
    $min = 0;
    $i = 0;

    while ($i < $arrLength - 1) {
        $min += $arr[$i];
        $i++;
    }

    $max = 0;
    $i = 1;
    while ($i < $arrLength) {
        $max += $arr[$i];
        $i++;
    }

    echo $min . " " . $max . PHP_EOL;
}

//$arr_temp = rtrim(fgets(STDIN));

//$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$arr = [7, 69, 2, 221, 8974];

var_dump(
    miniMaxSum($arr)
);

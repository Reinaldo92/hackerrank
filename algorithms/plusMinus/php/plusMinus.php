<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 *
 * Sample Input:
 * STDIN           Function
 * -----           --------
 * 6               arr[] size n = 6
 * -4 3 -9 0 4 1   arr = [-4, 3, -9, 0, 4, 1]
 *
 * Sample Output:
 * 0.500000
 * 0.333333
 * 0.166667
 *
 */

function plusMinus($arr)
{
    $arrLeng = count($arr);
    $a = 0;
    $b = 0;
    $c = 0;

    foreach ($arr as $key => $value) {
        if ($value >= 1) {
            $b = $b + 1;
        }
        if ($value <= -1) {
            $c = $c + 1;
        }
        if ($value == 0) {
            $a = $a + 1;
        }
    }

    echo number_format(($b / $arrLeng), 6, '.', '.') . PHP_EOL;
    echo number_format(($c / $arrLeng), 6, '.', '.') . PHP_EOL;
    echo number_format(($a / $arrLeng), 6, '.', '.') . PHP_EOL;
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

print_r(plusMinus($arr));

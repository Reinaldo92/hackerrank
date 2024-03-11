<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 *
 *  input:
 *  4
 *  3 2 1 3
 *
 *  output:
 *  2
 *
 */

function birthdayCakeCandles($candles)
{
    $arr = array_count_values($candles);
    arsort($arr);

    return  current($arr);
}


//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

//$candles_count = intval(trim(fgets(STDIN)));

//$candles_temp = rtrim(fgets(STDIN));

//$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$candles = [3, 2, 1, 3];
$result = birthdayCakeCandles($candles);

print_r($result);
//fwrite($fptr, $result . "\n");

//fclose($fptr);

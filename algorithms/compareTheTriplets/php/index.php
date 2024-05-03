<?php

/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 *
 *  input:
 *  17 28 30
 *  99 16 8
 *
 *  output:
 *  2 1
 *
 */

function compareTriplets($a, $b)
{
    $a_points = 0;
    $b_points = 0;

    $elements = count($a);

    while ($elements > 0) {
        $a_value = current($a);
        $b_value = current($b);

        if ($a_value == $b_value) {
            $a_points += 0;
            $b_points += 0;
        }
        if ($a_value > $b_value) {
            $a_points += 1;
            $b_points += 0;
        }
        if ($a_value < $b_value) {
            $a_points += 0;
            $b_points += 1;
        }

        $a_value = next($a);
        $b_value = next($b);

        $elements--;
    }
    return [$a_points, $b_points];
}

$fptr = fopen(__DIR__ . "/compare.txt", "w");

$a_temp = rtrim(fgets(STDIN));
$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));
$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);

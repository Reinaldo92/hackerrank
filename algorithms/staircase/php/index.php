<?php

/*
 * https://www.hackerrank.com/challenges/staircase
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 *
 * Sample Input:
 * 6
 *
 * Sample Output:
 *
 *            #
 *           ##
 *          ###
 *         ####
 *        #####
 *       ######
 *
 */

function staircase($n)
{
    $i = 1;
    while ($i <= $n) {
        echo str_repeat(" ", $n - $i);
        echo str_repeat("#", $i);
        echo PHP_EOL;
        $i++;
    };

}

//$n = intval(trim(fgets(STDIN)));
$n = 6;

staircase($n);

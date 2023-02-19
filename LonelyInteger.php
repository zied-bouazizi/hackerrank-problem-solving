<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a)
{
    // Write your code here
    $singleArr = [];
    $doubleArr = [];

    foreach ($a as $k => $v) {
        if (array_key_exists($v, $singleArr)) {
            unset($singleArr[$v]);
            $doubleArr[$v] = $v;
        } else {
            $singleArr[$v] = $v;
        }
    }

    return key($singleArr);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);

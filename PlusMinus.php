<?php

function plusMinus($arr)
{
    // Initialize the values to zero
    $positive = 0;
    $negative = 0;
    $zero = 0;
    // Get total index in the array
    $countArr = count($arr);

    /*
      Loop through the array 
      Check the value of each index match against zero
      Increment positive, negative, zero based of zero comparison
    */
    for ($i = 0; $i < $countArr; $i++) {
        if ($arr[$i] > 0) {
            $positive++;
        } elseif ($arr[$i] < 0) {
            $negative++;
        } else {
            $zero++;
        }
    }

    // Format decimals to 6 places
    $positive_ratio = number_format($positive / $countArr, 6, '.', '');
    $negative_ratio = number_format($negative / $countArr, 6, '.', '');
    $zero_ratio = number_format($zero / $countArr, 6, '.', '');

    print($positive_ratio . "\n" . $negative_ratio . "\n" . $zero_ratio);
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

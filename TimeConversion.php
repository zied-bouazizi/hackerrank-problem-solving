<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s)
{
    // Write your code here  
    $time = substr($s, 0, 8);
    $endTime = substr($s, -2);
    $arr = explode(":", $time);

    if ($arr[0] == "12" && $endTime == "AM") {
        $arr[0] = "00";
    } elseif ($arr[0] == "12" && $endTime == "PM") {
        $arr[0] = "12";
    } elseif ($endTime == "PM") {
        $arr[0] = $arr[0] + 12;
    }

    $time = implode(":", $arr);

    return $time;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);

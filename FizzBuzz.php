<?php

/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n)
{
    // Write your code here
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz" . PHP_EOL;
        } elseif ($i % 3 == 0 && $i % 5 != 0) {
            echo "Fizz" . PHP_EOL;
        } elseif ($i % 5 == 0 && $i % 3 != 0) {
            echo "Buzz" . PHP_EOL;
        } else {
            echo $i . PHP_EOL;
        }
    }
}
$n = intval(trim(fgets(STDIN)));

fizzBuzz($n);

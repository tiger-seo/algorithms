<?php
/**
 * @author tiger
 */

namespace Algorithm\PrimeGenerating;

class SieveOfEratosthenes
{
    public function generate($n)
    {
        $numbers = array_fill(1, $n, true);

        $i = 2;
        while ($i < $n) {
            if ($numbers[$i]) {
                $j = $i + $i;
                while ($j <= $n) {
                    if ($j % $i === 0) {
                        $numbers[$j] = false;
                    }
                    $j += $i;
                }
            }
            $i++;
        }

        // one is not a prime number
        $numbers[1] = false;

        return array_keys(array_filter($numbers));
    }
}

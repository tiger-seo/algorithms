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
            $j = $i + $i;
            while ($j <= $n) {
                if ($j % $i === 0) {
                    $numbers[$j] = false;
                }
                $j += $i;
            }
            $i++;
        }

        return array_keys(array_filter($numbers));
    }
}

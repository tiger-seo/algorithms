<?php
/**
 * @author tiger
 */

namespace Algorithm\Sorting;

class InsertionSort
{
    public function sort(array $ary)
    {
        if (count($ary) < 2) {
            return $ary;
        }

        for ($i = 0, $n = count($ary); $i < $n; $i++) {
            $x = $ary[$i];
            for ($j = $i - 1; $j >= 0; $j--) {
                if ($ary[$j] > $x) {
                    $ary[$j + 1] = $ary[$j];
                    $ary[$j] = $x;
                }
            }
        }

        return $ary;
    }
}

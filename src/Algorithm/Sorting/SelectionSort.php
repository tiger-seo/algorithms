<?php
/**
 * @author tiger
 */

namespace Algorithm\Sorting;

class SelectionSort
{
    public function sort(array $ary)
    {
        if (count($ary) < 2) {
            return $ary;
        }

        for ($i = 0, $n = count($ary); $i < $n; $i++) {
            $minKey   = $i;
            $minValue = $ary[$i];
            for ($j = $i + 1; $j < $n; $j++) {
                if ($ary[$j] < $minValue) {
                    $minKey   = $j;
                    $minValue = $ary[$j];
                }
            }
            $ary[$minKey] = $ary[$i];
            $ary[$i]      = $minValue;
        }

        return $ary;
    }
}

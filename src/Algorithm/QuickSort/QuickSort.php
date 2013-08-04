<?php
/**
 * @author tiger
 */

namespace Algorithm\QuickSort;

class QuickSort
{
    public function sort(array &$ary, $startIndex = null, $endIndex = null)
    {
        if (count($ary) < 2) {
            return $ary;
        }

        if ($startIndex === null) {
            $startIndex = 0;
            $endIndex   = count($ary) - 1;
        }

        // evaluate pivot
        $pivotIndex = floor(($endIndex + $startIndex) / 2);
        $pivotValue = $ary[$pivotIndex];

        // swap pivot and the first element in the partition
        $ary[$pivotIndex] = $ary[$startIndex];
        $ary[$startIndex] = $pivotValue;

        for ($i = $j = $startIndex + 1; $i <= $endIndex; $i++) {
            if ($ary[$i] < $pivotValue) {
                if ($i === $j) {
                    $j++;
                    continue;
                }
                $temp    = $ary[$j];
                $ary[$j] = $ary[$i];
                $ary[$i] = $temp;
                $j++;
            }
        }

        // new pivot position
        $pivotIndex = $j - 1;

        // swap pivot and the last element of the left partition
        $ary[$startIndex] = $ary[$pivotIndex];
        $ary[$pivotIndex] = $pivotValue;

        // recursively sort left partition
        if ($pivotIndex - $startIndex > 1) {
            $this->sort($ary, $startIndex, $pivotIndex - 1);
        }

        // recursively sort right partition
        if ($endIndex - $pivotIndex > 1) {
            $this->sort($ary, $pivotIndex + 1, $endIndex);
        }
    }
}

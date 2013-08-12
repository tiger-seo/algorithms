<?php
/**
 * @author tiger
 */

namespace Algorithm\Sorting;

class BubbleSort
{
    public function sort(array $ary)
    {
        if (count($ary) < 2) {
            return $ary;
        }

        $j = count($ary);
        do {
            $i = 1;
            $swappingOccurred = false;
            while ($i < $j) {
                if ($ary[$i - 1] > $ary[$i]) {
                    $temp             = $ary[$i - 1];
                    $ary[$i - 1]      = $ary[$i];
                    $ary[$i]          = $temp;
                    $swappingOccurred = true;
                }
                $i++;
            }
            $j--;
        } while ($swappingOccurred);

        return $ary;
    }
}

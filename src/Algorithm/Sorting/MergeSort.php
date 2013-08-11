<?php
/**
 * @author tiger
 */

namespace Algorithm\Sorting;

class MergeSort
{
    public function sort(array $ary)
    {
        if (count($ary) < 2) {
            return $ary;
        } elseif (count($ary) > 2) {
            $middle = (int)floor(count($ary) / 2);
            $sortedAry1 = $this->sort(array_slice($ary, 0, $middle));
            $sortedAry2 = $this->sort(array_slice($ary, $middle));
        } else /* count($ary) is 2 */ {
            return $ary[0] <= $ary[1] ? $ary : [$ary[1], $ary[0]];
        }

        $i = $j = 0;
        $mergedAry = [];
        while ($i < count($sortedAry1) && $j < count($sortedAry2)) {
            if ($sortedAry1[$i] <= $sortedAry2[$j]) {
                $mergedAry[] = $sortedAry1[$i];
                $i++;
            } else {
                $mergedAry[] = $sortedAry2[$j];
                $j++;
            }
        }
        while ($i < count($sortedAry1)) {
            $mergedAry[] = $sortedAry1[$i];
            $i++;
        }
        while ($j < count($sortedAry2)) {
            $mergedAry[] = $sortedAry2[$j];
            $j++;
        }

        return $mergedAry;
    }
}

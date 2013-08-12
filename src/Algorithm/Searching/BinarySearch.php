<?php
/**
 * @author tiger
 */

namespace Algorithm\Searching;

class BinarySearch
{
    private function recursiveBinarySearch(array &$ary, $searchValue, $left, $right)
    {
        $middleIndex = (int)(($right + $left) / 2);
        $middleValue = $ary[$middleIndex];

        if ($searchValue === $middleValue) {
            return $middleIndex;
        } elseif ($middleIndex === 0) {
            return false;
        }

        if ($searchValue < $middleValue) {
            return $this->recursiveBinarySearch($ary, $searchValue, $left, $middleIndex - 1);
        } else {
            return $this->recursiveBinarySearch($ary, $searchValue, $middleIndex + 1, $right);
        }
    }

    /**
     * @param int[] $ary         Sorted array of integers
     * @param int   $searchValue Integer value to be found in $ary
     *
     * @return int
     */
    public function find(array $ary, $searchValue)
    {
        if (empty($ary)) {
            return false;
        } else {
            return $this->recursiveBinarySearch($ary, $searchValue, 0, count($ary) - 1);
        }
    }
}

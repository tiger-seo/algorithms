<?php
/**
 * @author tiger
 */

namespace Algorithm\Searching;

class FindMissingNumbers
{
    /**
     * @param array $ary
     * @return int|bool
     */
    public function find(array $ary)
    {
        $missingNumbers = [];

        // this algorithm rely on sorted array
        sort($ary);

        $prevNumber = array_shift($ary);
        foreach ($ary as $nextNumber) {
            if ($nextNumber - $prevNumber >= 2) {
                $missingNumbers[] = $nextNumber - 1;
            }
            $prevNumber = $nextNumber;
        }

        return $missingNumbers;
    }
}

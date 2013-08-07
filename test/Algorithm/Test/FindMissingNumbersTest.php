<?php
/**
 * @author tiger
 */

namespace Algorithm\Test;

use Algorithm\FindMissingNumbers\FindMissingNumbers;

class FindMissingNumbersTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FindMissingNumbers
     */
    private $findMissingNumbers;

    protected function setUp()
    {
        $this->findMissingNumbers = new FindMissingNumbers();
    }

    public function test()
    {
        $ary = range(1, 100);
        shuffle($ary);
        $randomIndex1 = array_rand($ary);
        do
            $randomIndex2 = array_rand($ary);
        while ($randomIndex1 === $randomIndex2);
        $expectedMissingNumbers = [
            $ary[$randomIndex1],
            $ary[$randomIndex2]
        ];
        sort($expectedMissingNumbers);
        unset($ary[$randomIndex1], $ary[$randomIndex2]);

        $actualMissingNumbers = $this->findMissingNumbers->find($ary);

        $this->assertEquals($expectedMissingNumbers, $actualMissingNumbers);
    }
}

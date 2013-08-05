<?php
/**
 * @author tiger
 */

namespace Algorithm\Test;

use Algorithm\FindMissingNumber\FindMissingNumber;

class FindMissingNumberTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FindMissingNumber
     */
    private $findMissingNumber;

    protected function setUp()
    {
        $this->findMissingNumber = new FindMissingNumber();
    }

    public function test()
    {
        $ary = range(1, 100);
        shuffle($ary);
        $randomIndex = array_rand($ary);
        $expectedMissingValue = $ary[$randomIndex];
        unset($ary[$randomIndex]);

        $actualMissingValue = $this->findMissingNumber->find($ary);

        $this->assertEquals($expectedMissingValue, $actualMissingValue);
    }
}

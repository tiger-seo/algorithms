<?php
/**
 * @author tiger
 */

namespace Algorithm\Test;

use Algorithm\QuickSort\QuickSort;

class QuickSortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var QuickSort
     */
    private $quickSort;

    protected function setUp()
    {
        $this->quickSort = new QuickSort();
    }

    public function testEmptyArray()
    {
        $expected = $actual = [];
        $this->quickSort->sort($actual);
        $this->assertEquals($expected, $actual);
    }

    public function testOneElementArray()
    {
        $expected = $actual = [1];
        $this->quickSort->sort($actual);
        $this->assertEquals($expected, $actual);
    }

    public function testSort()
    {
        $samplesNumber     = 100;
        $samplesLowerBound = 1;
        $samplesUpperBound = 100;

        $input = [];
        for ($i = 0; $i < $samplesNumber; $i++) {
            $input[] = rand($samplesLowerBound, $samplesUpperBound);
        }
        $expected = $actual = $input;
        sort($expected);
        $this->quickSort->sort($actual);

        $this->assertEquals($expected, $actual);
    }
}

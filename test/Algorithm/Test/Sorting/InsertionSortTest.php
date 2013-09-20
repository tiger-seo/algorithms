<?php
/**
 * @author tiger
 */

namespace Algorithm\Test\Sorting;

use Algorithm\Sorting\InsertionSort;

class InsertionSortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var InsertionSort
     */
    private $insertionSort;

    protected function setUp()
    {
        $this->insertionSort = new InsertionSort();
    }

    public function testEmptyArray()
    {
        $expected = [];
        $actual   = $this->insertionSort->sort([]);
        $this->assertEquals($expected, $actual);
    }

    public function testOneElementArray()
    {
        $expected = [1];
        $actual   = $this->insertionSort->sort([1]);
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
        $expected = $input;
        sort($expected);
        $actual = $this->insertionSort->sort($input);

        $this->assertEquals($expected, $actual);
    }
}

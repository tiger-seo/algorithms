<?php
/**
 * @author tiger
 */

namespace Algorithm\Test\Sorting;

use Algorithm\Sorting\MergeSort;

class MergeSortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MergeSort
     */
    protected $mergeSort;

    protected function setUp()
    {
        $this->mergeSort = new MergeSort();
    }

    public function testEmptyArray()
    {
        $expected = [];
        $actual   = $this->mergeSort->sort([]);
        $this->assertEquals($expected, $actual);
    }

    public function testOneElementArray()
    {
        $expected = [1];
        $actual   = $this->mergeSort->sort([1]);
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
        $actual = $this->mergeSort->sort($input);

        $this->assertEquals($expected, $actual);
    }
}

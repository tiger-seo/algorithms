<?php
/**
 * @author tiger
 */

namespace Algorithm\Test\Sorting;

use Algorithm\Sorting\SelectionSort;

class SelectionSortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SelectionSort
     */
    private $selectionSort;

    protected function setUp()
    {
        $this->selectionSort = new SelectionSort();
    }

    public function testEmptyArray()
    {
        $expected = [];
        $actual   = $this->selectionSort->sort([]);
        $this->assertEquals($expected, $actual);
    }

    public function testOneElementArray()
    {
        $expected = [1];
        $actual   = $this->selectionSort->sort([1]);
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
        $actual = $this->selectionSort->sort($input);

        $this->assertEquals($expected, $actual);
    }
}

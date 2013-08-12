<?php
/**
 * @author tiger
 */

namespace Algorithm\Test\Sorting;

use Algorithm\Sorting\BubbleSort;

class BubbleSortTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BubbleSort
     */
    private $bubbleSort;

    protected function setUp()
    {
        $this->bubbleSort = new BubbleSort();
    }

    public function testEmptyArray()
    {
        $expected = [];
        $actual   = $this->bubbleSort->sort([]);
        $this->assertEquals($expected, $actual);
    }

    public function testOneElementArray()
    {
        $expected = [1];
        $actual   = $this->bubbleSort->sort([1]);
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
        $actual = $this->bubbleSort->sort($input);

        $this->assertEquals($expected, $actual);
    }
}

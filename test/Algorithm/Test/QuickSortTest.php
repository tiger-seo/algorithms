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
    public $quickSort;

    protected function setUp()
    {
        $this->quickSort = new QuickSort();
    }

    public function testEmptyArray()
    {
        $input    = [];
        $expected = [];
        $actual   = $this->quickSort->sort($input);
        $this->assertEquals($expected, $actual);
    }

    public function testOneElementArray()
    {
        $input    = [1];
        $expected = [1];
        $actual   = $this->quickSort->sort($input);
        $this->assertEquals($expected, $actual);
    }
}

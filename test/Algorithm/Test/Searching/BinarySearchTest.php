<?php
/**
 * @author tiger
 */

namespace Algorithm\Test\Searching;

use Algorithm\Searching\BinarySearch;

class BinarySearchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BinarySearch
     */
    private $binarySearch;

    protected function setUp()
    {
        $this->binarySearch = new BinarySearch();
    }

    public function testFind()
    {
        $inputArray = range(1, 100);
        $expectedFoundIndex = array_rand($inputArray);
        $valueToBeFound = $inputArray[$expectedFoundIndex];

        $actualFoundIndex = $this->binarySearch->find($inputArray, $valueToBeFound);

        $this->assertEquals($expectedFoundIndex, $actualFoundIndex);
    }
}

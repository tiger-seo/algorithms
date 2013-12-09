<?php

namespace Algorithm\Test\Queue;

use Algorithm\Queue\BinaryHeap;

class BinaryHeapTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BinaryHeap
     */
    private $binaryHeap;

    protected function setUp()
    {
        $this->binaryHeap = new BinaryHeap();
    }

    public function testInsert()
    {
        $values = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
        $expected = [null, 'G', 'D', 'F', 'A', 'C', 'B', 'E'];

        foreach ($values as $char) {
            $this->binaryHeap->insert($char);
        }

        $this->assertAttributeEquals($expected, 'heap', $this->binaryHeap);
    }
}

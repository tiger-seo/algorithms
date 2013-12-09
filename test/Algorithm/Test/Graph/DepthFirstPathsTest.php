<?php

namespace Algorithm\Test\Graph;

use Algorithm\Graph\DepthFirstPaths;
use Algorithm\Graph\Graph;

class DepthFirstPathsTest extends \PHPUnit_Framework_TestCase
{
    private $graph;

    protected function setUp()
    {
        /*
          0  1 --- 2  3  4   5
                  / \    |  /
                 |   \   | /
                /     \  |/
                |      \ |
          6  7  8       9
         */

        $this->graph = (new Graph(10))
            ->addEdge(1, 2)
            ->addEdge(2, 9)
            ->addEdge(2, 8)
            ->addEdge(9, 4)
            ->addEdge(9, 5);
    }

    public function testHasPathTo()
    {
        $paths = new DepthFirstPaths($this->graph, 1);

        $this->assertFalse($paths->hasPathTo(0));
        $this->assertTrue($paths->hasPathTo(1));
        $this->assertTrue($paths->hasPathTo(5));
    }

    public function testGetPathTo()
    {
        $dfp = new DepthFirstPaths($this->graph, 1);

        $this->assertNull($dfp->getPathTo(0));

        $this->assertEquals(
             [1, 2, 9, 5],
             iterator_to_array($dfp->getPathTo(5), false)
        );
    }
}

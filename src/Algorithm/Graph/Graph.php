<?php

namespace Algorithm\Graph;

/**
 * This one developed mainly for learning purposes and so it is not optimal for industrial use
 *
 * @package Algorithm\Graph
 */
class Graph
{
    /**
     * @var array
     */
    protected $adjacent;

    public function __construct($vertices)
    {
        $this->adjacent = array_fill(0, $vertices, []);
    }

    public function addEdge($v, $w)
    {
        $this->adjacent[$v][] = $w;
        $this->adjacent[$w][] = $v;

        return $this;
    }

    public function getVerticesCount()
    {
        return count($this->adjacent);
    }

    /*public function getEdgesCount()
    {
        return 0;
    }*/

    /**
     * @param integer $v
     *
     * @return array
     */
    public function getAdjacentTo($v)
    {
        return $this->adjacent[$v];
    }
}

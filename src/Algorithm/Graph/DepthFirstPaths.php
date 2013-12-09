<?php

namespace Algorithm\Graph;

/**
 * This one developed mainly for learning purposes and so it is not optimal for industrial use
 *
 * @package Algorithm\Graph
 */
class DepthFirstPaths
{
    /**
     * @var Graph
     */
    private $graph;

    /**
     * @var bool[]
     */
    private $marked;

    /**
     * @var bool[]
     */
    private $edgeTo;

    /**
     * @var int
     */
    private $startVertex;

    public function __construct(Graph $graph, $startVertex)
    {
        $this->graph = $graph;
        $this->startVertex = $startVertex;

        $verticesCount = $graph->getVerticesCount();
        $this->marked = array_fill(0, $verticesCount, false);
        $this->edgeTo = array_fill(0, $verticesCount, null);

        $this->dfs($startVertex);
    }

    private function dfs($v)
    {
        $this->marked[$v] = true;
        foreach ($this->graph->getAdjacentTo($v) as $w) {
            if (!$this->marked[$w]) {
                $this->dfs($w);
                $this->edgeTo[$w] = $v;
            }
        }
    }

    public function hasPathTo($endVertex)
    {
        return $this->marked[$endVertex];
    }

    public function getPathTo($endVertex)
    {
        if (!$this->hasPathTo($endVertex)) {
            return null;
        }

        $path = new \SplStack();
        for ($i = $endVertex; $i != $this->startVertex; $i = $this->edgeTo[$i]) {
            $path->push($i);
        }
        $path->push($this->startVertex);

        return $path;
    }
}

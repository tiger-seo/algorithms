<?php

namespace Algorithm\Queue;

class BinaryHeap
{
    private $heap = [0 => null];
    private $length = 0;

    private function swim($index)
    {
        while ($index >= 2 && $this->heap[$parent = (int)($index / 2)] < $this->heap[$index]) {
            // exchange root and child node
            $tmp = $this->heap[$parent];
            $this->heap[$parent] = $this->heap[$index];
            $this->heap[$index] = $tmp;
            $index = $parent;
        }
    }

    private function sink($int)
    {
        // TODO: to be implemented
    }

    public function isEmpty()
    {
        return $this->length === 0;
    }

    public function insert($value)
    {
        $this->heap[++$this->length] = $value;
        $this->swim($this->length);
    }

    public function deleteMax()
    {
        if ($this->length < 1) {
            throw new \LogicException('Queue is empty');
        }

        $max = $this->heap[1];
        $this->heap[1] = $this->heap[$this->length];
        $this->heap[$this->length--] = null;
        $this->sink(1);

        return $max;
    }
}

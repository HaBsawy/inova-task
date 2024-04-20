<?php

// The time complexity for Enqueue and Dequeue operations is (2n)

class QueueDS
{
    /**
     * @var array
     */
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }

    public function push($element)
    {
        $this->array[] = $element;
    }

    public function pop()
    {
        if (count($this->array) == 0)
            return null;

        return array_pop($this->array);
    }
}

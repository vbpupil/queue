<?php

/**
 * Author: Dean Haines
 * Date: 15/06/17
 * Version: 1.0
 */

namespace App;

class queue
{

    protected $limit;
    protected $count;
    protected $items = [];

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->count = 0;
    }

    public function addItem(queueItem $item)
    {
        if(!$this->availableSpaceCheck()){
            array_pop($this->items);
            $this->count--;
        }

        array_unshift($this->items, $item);
        $this->count++;

        return $this;
    }

    public function availableSpaceCheck()
    {
        return $this->count < $this->limit;
    }
}
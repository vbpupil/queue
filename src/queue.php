<?php

/**
 * Author: Dean Haines
 * Date: 15/06/17
 * Version: 1.0
 */

namespace vbpupil;

class Queue
{

    /**
     * @var
     */
    protected $limit;
    /**
     * @var int
     */
    protected $count;
    /**
     * @var array
     */
    protected $items = [];

    /**
     * queue constructor.
     * @param $limit
     */
    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->count = 0;
    }

    /**
     * @param queueItem $item
     * @return $this
     */
    public function addItem(queueItem $item)
    {
        if(!$this->availableSpaceCheck()){
            unset($this->items[0]);
            $this->items = array_values($this->items);
            $this->count--;
        }

        $this->items[] = $item;
        $this->count++;

        return $this;
    }

    /**
     * @return bool
     */
    public function availableSpaceCheck()
    {
        return $this->count < $this->limit;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    public function getItems()
    {
        return $this->items;
    }
}
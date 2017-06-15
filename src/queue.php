<?php

/**
 * Author: Dean Haines
 * Date: 15/06/17
 * Version: 1.0
 */

namespace App;

class queue
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
            array_pop($this->items);
            $this->count--;
        }

        array_unshift($this->items, $item);
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
}
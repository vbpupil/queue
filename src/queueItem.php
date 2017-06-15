<?php
/**
 * @author  dean
 * @date    15/06/17
 * @version 1.0
 */

namespace App;


class queueItem
{

    protected $handle;

    public function __construct($handle)
    {
        $this->handle = $handle;
    }


}
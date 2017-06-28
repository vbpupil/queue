<?php
/**
 * @author  dean
 * @date    15/06/17
 * @version 1.0
 */

namespace vbpupil;


class queueItem
{

    /**
     * @var
     */
    protected $handle;

    /**
     * queueItem constructor.
     * @param $handle
     */
    public function __construct($handle)
    {
        $this->handle = $handle;
    }

}
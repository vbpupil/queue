<?php

/**
 * @author  dean
 * @date    15/06/17
 * @version 1.0
 */
class Test extends PHPUnit_Framework_TestCase
{

    protected $sut;

    public function setUp()
    {
        $this->sut = new \App\queue(20);
    }

    public function testAddItem()
    {
        $this->sut->addItem(new \App\queueItem('test'));

    }

    public function testAddMoreThanLimit()
    {

    }
}

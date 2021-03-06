<?php

namespace Tests;

/**
 * @author  dean
 * @date    15/06/17
 * @version 1.0
 */

use vbpupil\queue;
use vbpupil\queueItem;

class queueTest extends \PHPUnit_Framework_TestCase
{

    protected $sut;

    public function setUp()
    {
        $this->sut = new queue(3);
    }
    /** @test */
    public function testAddAndGetItem()
    {
        $this->sut->addItem(new queueItem('test'));
        $this->assertEquals(1, $this->sut->getCount());

        $this->assertInternalType('array', $this->sut->getItems());
    }



    public function testLimit()
    {
        $this->sut->addItem(new queueItem('test1'));
        $this->sut->addItem(new queueItem('test2'));
        $this->sut->addItem(new queueItem('test3'));
        $this->assertEquals(3, $this->sut->getCount());
    }



    public function testAvailableSpaceCheck()
    {
        $q = new queue(1);
        $this->assertEquals(true, $q->availableSpaceCheck());

        $q->addItem(new queueItem('testttt'));
        $this->assertEquals(false, $q->availableSpaceCheck());
    }


}

<?php

include 'vendor/autoload.php';

use vbpupil\queue;
use vbpupil\queueItem;

$q = new queue(3);
$qi = new queueItem('1');
$qi1 = new queueItem('2');
$qi2 = new queueItem('3');
$qi3 = new queueItem('4');
$qi4 = new queueItem('5');

$q->addItem($qi)
    ->addItem($qi1)
    ->addItem($qi2)
    ->addItem($qi3)
    ->addItem($qi4);

dump($q->getItems());

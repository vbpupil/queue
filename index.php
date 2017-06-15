<?php

include 'vendor/autoload.php';

use App\queue;
use App\queueItem;

$q = new queue(4);
$qi = new queueItem('deans 1');
$qi1 = new queueItem('deans 2');
$qi2 = new queueItem('deans 3');
$qi3 = new queueItem('deans 4');
$qi4 = new queueItem('deans 5');

$q->addItem($qi)
    ->addItem($qi1)
    ->addItem($qi2)
    ->addItem($qi3)
    ->addItem($qi4);

dump($q);

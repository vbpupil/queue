<?php

include 'vendor/autoload.php';

use vbpupil\queue;
use vbpupil\queueItem;

$q = new queue(3);

$q->addItem(1)
    ->addItem(2)
    ->addItem(3)
    ->addItem(4)
    ->addItem(5);

dump($q->getItems());

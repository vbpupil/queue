## Quality Assurance

![PHP 5.6](https://img.shields.io/badge/PHP-5.6-blue.svg)
![PHP 7](https://img.shields.io/badge/PHP-7-blue.svg)
[![Build Status](https://travis-ci.org/vbpupil/queue.svg?branch=master)](https://travis-ci.org/vbpupil/queue)



# Queue Data Structure

A simple Queue data structure mechanism which allows you to set a max limit of items
you wish to carry. After the max amount is met any subsequent additions will knock off
items from the end.

## Sample Usage

```php
$q = new queue(1);
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
```

The above example will return 1 item with the value of **5**.
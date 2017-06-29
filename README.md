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

$q->addItem(1)
    ->addItem(2)
    ->addItem(3)
    ->addItem(4)
    ->addItem(5);

dump($q->getItems());
```

The above example will return 1 item with the value of **5**.
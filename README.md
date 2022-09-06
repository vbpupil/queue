## Quality Assurance

![PHP 8](https://img.shields.io/badge/PHP-8.1-blue.svg)
[![Build Status](https://app.travis-ci.com/vbpupil/queue.svg?branch=master)](https://travis-ci.org/vbpupil/queue)
[![Code Climate](https://codeclimate.com/github/vbpupil/queue/badges/gpa.svg)](https://codeclimate.com/github/vbpupil/queue)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)


# Queue Data Structure

A simple Queue data structure mechanism which allows you to set a max limit of items
you wish to hold. After the max amount is met any subsequent additions will knock off
items from the end.

## Sample Usage

```php
include 'vendor/autoload.php';

use vbpupil\Queue\Queue;

// create a new queue and specify a limit - here we have set it to hold 1 item.
$q = new Queue(1);

//add items
$q->addItem('Item 1')
    ->addItem('Item 2')
    ->addItem('Item 3')
    ->addItem('Item 4')
    ->addItem('Item 5');

echo($q->getItems());
```

The above example will return 1 item with the value of **Item 5**.
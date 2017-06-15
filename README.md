# Queue Data Structure

A simple Queue data structure mechanism which allows you to set a max limit of items
you wish to carry. After the max amount is met any subsequent additions will knock off
items from the end.

## Sample Usage

```php
$q = new queue(4);
$qi = new queueItem('deans 1');
$qi1 = new queueItem('deans 2');

$q->addItem($qi)
    ->addItem($qi1);

dump($q);
```
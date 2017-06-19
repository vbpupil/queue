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
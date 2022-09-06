<?php
/**
 * (c) Dean Haines <vbpupil@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace vbpupil\Queue;

class Queue
{
    protected int $count = 0;

    protected array $items = [];

    public function __construct(protected int $limit)
    {
    }

    public function addItem($item): Queue
    {
        if (!$this->hasAvailableSpace()) {
            unset($this->items[0]);
            $this->items = array_values($this->items);
            $this->count--;
        }

        $this->items[] = $item;
        $this->count++;

        return $this;
    }

    public function hasAvailableSpace(): bool
    {
        return $this->getCount() < $this->limit;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getItems()
    {
        return $this->items;
    }
}

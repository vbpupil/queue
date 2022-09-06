<?php

namespace test\vbpupil\Queue;

/**
 * (c) Dean Haines <vbpupil@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;
use vbpupil\Queue\Queue;

class QueueTest extends TestCase
{
    /**
     * @param array $items
     * @param array $expectedItems
     * @param int $expectedItemCount
     * @param int $limit
     * @param bool $hasAvailableSpace
     * @return void
     * @dataProvider queueProvider
     */
    public function testQueueFunctionsCorrectly(array $items, array $expectedItems, int $expectedItemCount, int $limit, bool $hasAvailableSpace)
    {
        $queue = new Queue($limit);

        foreach ($items as $item) {
            $queue->addItem($item);
        }

        $this->assertEquals($expectedItemCount, $queue->getCount());
        $this->assertEquals($expectedItemCount, sizeof($queue->getItems()));
        $this->assertEquals($expectedItems, $queue->getItems());
        $this->assertEquals($hasAvailableSpace, $queue->hasAvailableSpace());
    }

    public function queueProvider(): array
    {
        return [
            'adding and getting an item successfully' => [
                'items' => ['Item 1'],
                'expectedItems' => ['Item 1'],
                'expectedItemCount' => 1,
                'limit' => 1,
                'hasAvailableSpace' => false,
            ],
            'adding many items and retrieving them successfully' => [
                'items' => ['Item 1', 'Item 2', 'Item 3'],
                'expectedItems' => ['Item 1', 'Item 2', 'Item 3'],
                'expectedItemCount' => 3,
                'limit' => 5,
                'hasAvailableSpace' => true,
            ],
            'adding more items than is allowed works as expected' => [
                'items' => ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5', 'Item 6'],
                'expectedItems' => ['Item 4', 'Item 5', 'Item 6'],
                'expectedItemCount' => 3,
                'limit' => 3,
                'hasAvailableSpace' => false,
            ],
        ];
    }
}

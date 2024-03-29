<?php
declare(strict_types=1);
namespace Exercises\Queue;
/**
 * Create a Queue.
 *
 * When queue is empty remove and peek methods should return null.
 *
 * @property mixed[] $queue
 * @method void add(mixed $value)
 * @method mixed|null remove()
 * @method mixed|null peek()
 * @method static self zip(self $queue1, self $queue2) interweaves two provided queues
 * @example $queue1 = new Queue();
 * $queue1->add(1);
 * $queue1->add(2);
 * $queue1->add(3);
 * $queue1->peek() === 3;
 * $queue1->remove() === 3;
 *
 * $queue2 = new Queue();
 *
 * $queue1->add('a');
 * $queue1->add('b');
 * $queue1->add('c');
 *
 * Queue::zip(queue1, queue2) -> [1, 'a', 2, 'b', 'c']
 */
final class Queue
{
	private $queue = [];

	public function add($value)
	{
		array_push($this->queue, $value);
	}

	public function remove()
	{
		return array_pop($this->queue);
	}

	public function peek()
	{
		if (count($this->queue) > 0) {
			return $this->queue[0];
		} else {
			return null;
		}
		
	}
}

$queue1 = new Queue();
$queue1->add(1);
$queue1->add(2);
$queue1->add(3);
echo $queue1->peek();
echo "\n";
echo $queue1->remove();
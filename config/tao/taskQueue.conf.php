<?php
/**
 * Default config header created during install
 */

return new oat\tao\model\taskQueue\QueueDispatcher(array(
    'queues' => array(
        new oat\tao\model\taskQueue\Queue('queue', new oat\tao\model\taskQueue\Queue\Broker\InMemoryQueueBroker(1), 1)
    ),
    'task_log' => 'tao/taskLog',
    'task_to_queue_associations' => array(
    ),
    'task_selector_strategy' => new oat\tao\model\taskQueue\Queue\TaskSelector\WeightStrategy()
));

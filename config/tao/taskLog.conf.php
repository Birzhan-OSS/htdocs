<?php
/**
 * Default config header created during install
 */

return new oat\tao\model\taskQueue\TaskLog(array(
    'task_log_broker' => new oat\tao\model\taskQueue\TaskLog\Broker\RdsTaskLogBroker('default', 'task_log'),
    'task_to_category_associations' => array(
        'oat\\tao\\model\\task\\ImportByHandler' => 'import',
        'oat\\tao\\model\\task\\ExportByHandler' => 'export',
        'oat\\taoQtiItem\\model\\tasks\\ImportQtiItem' => 'import',
        'oat\\taoQtiTest\\models\\tasks\\ImportQtiTest' => 'import',
        'oat\\taoDeliveryRdf\\model\\tasks\\CompileDelivery' => 'delivery_comp',
        'oat\\taoOutcomeUi\\scripts\\task\\ExportDeliveryResults' => 'export'
    )
));

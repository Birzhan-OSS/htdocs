<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiTest\models\runner\synchronisation\SynchronisationService(array(
    'actions' => array(
        'exitTest' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\ExitTest',
        'move' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\Move',
        'pause' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\Pause',
        'skip' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\Skip',
        'storeTraceData' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\StoreTraceData',
        'timeout' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\Timeout',
        'getNextItemData' => 'oat\\taoQtiTest\\models\\runner\\synchronisation\\action\\NextItemData'
    )
));

<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiTest\models\runner\time\QtiTimerFactory(array(
    'timer-class' => 'oat\\taoQtiTest\\models\\runner\\time\\QtiTimer',
    'storage-class' => 'oat\\taoQtiTest\\models\\runner\\time\\QtiTimeStorage',
    'storage-format' => 'oat\\taoQtiTest\\models\\runner\\time\\storageFormat\\QtiTimeStoragePackedFormat'
));

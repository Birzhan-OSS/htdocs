<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\filesystem\FileSystemService(array(
    'filesPath' => 'C:\\xampp\\htdocs\\data\\',
    'adapters' => array(
        'taskQueueStorage' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\taskQueueStorage'
            )
        ),
        'fileUploadDirectory' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\tao/upload'
            )
        ),
        'public' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\tao/public'
            )
        ),
        'private' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\tao/private'
            )
        ),
        'log' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\tao\\log'
            )
        ),
        'sharedTmp' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\tmp'
            )
        ),
        'stateBackup' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\stateBackup'
            )
        ),
        'itemDirectory' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\taoItems/itemData'
            )
        ),
        'taoQtiTest' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\taoQtiTest'
            )
        ),
        'taoQtiTestSessionFilesystem' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\taoQtiTestSessionFilesystem'
            )
        ),
        'deliveryAssemblyExport' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\deliveryAssemblyExport'
            )
        ),
        'qtiItemPci' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\qtiItemPci'
            )
        ),
        'qtiItemImsPci' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\qtiItemImsPci'
            )
        ),
        'portableElementStorage' => array(
            'class' => 'Local',
            'options' => array(
                'root' => 'C:\\xampp\\htdocs\\data\\portableElementStorage'
            )
        )
    )
));

<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\event\EventManager(array(
    'listeners' => array(
        'oat\\generis\\model\\data\\event\\ResourceCreated' => array(
            array(
                'oat\\generis\\model\\data\\permission\\PermissionManager',
                'catchEvent'
            ),
            array(
                'tao/ResourceWatcher',
                'catchCreatedResourceEvent'
            )
        ),
        'oat\\tao\\model\\event\\FileUploadedEvent' => array(
            array(
                'oat\\tao\\model\\upload\\UploadService',
                'listenUploadEvent'
            )
        ),
        'oat\\tao\\model\\event\\UploadLocalCopyCreatedEvent' => array(
            array(
                'oat\\tao\\model\\upload\\UploadService',
                'listenLocalCopyEvent'
            )
        ),
        'oat\\generis\\model\\data\\event\\ResourceUpdated' => array(
            array(
                'tao/ResourceWatcher',
                'catchUpdatedResourceEvent'
            )
        ),
        'oat\\generis\\model\\data\\event\\ResourceDeleted' => array(
            array(
                'tao/ResourceWatcher',
                'catchDeletedResourceEvent'
            )
        ),
        'oat\\tao\\model\\event\\LoginFailedEvent' => array(
            array(
                'tao/userlocks',
                'catchFailedLogin'
            )
        ),
        'oat\\tao\\model\\event\\LoginSucceedEvent' => array(
            array(
                'tao/userlocks',
                'catchSucceedLogin'
            )
        ),
        'oat\\taoItems\\model\\event\\ItemRdfUpdatedEvent' => array(
            array(
                'oat\\taoQtiItem\\model\\Listener\\ItemUpdater',
                'catchItemRdfUpdatedEvent'
            )
        ),
        'oat\\taoDelivery\\models\\classes\\execution\\event\\DeliveryExecutionState' => array(
            array(
                'taoQtiTest/QtiTestListenerService',
                'executionStateChanged'
            ),
            array(
                'oat\\taoOutcomeUi\\model\\Wrapper\\ResultServiceWrapper',
                'deleteResultCache'
            )
        ),
        'oat\\taoQtiTest\\models\\event\\QtiTestStateChangeEvent' => array(
            array(
                'taoQtiTest/QtiTestListenerService',
                'sessionStateChanged'
            )
        ),
        'oat\\taoDeliveryRdf\\model\\event\\DeliveryCreatedEvent' => array(
            array(
                'oat\\taoDeliveryRdf\\model\\TestRunnerFeatures',
                'enableDefaultFeatures'
            )
        ),
        'oat\\taoDelivery\\models\\classes\\execution\\event\\DeliveryExecutionReactivated' => array(
            array(
                'oat\\taoDeliveryRdf\\helper\\SessionStateHelper',
                'onExecutionReactivation'
            )
        ),
        'oat\\taoDelivery\\models\\classes\\execution\\event\\DeliveryExecutionCreated' => array(
            array(
                'taoOutcomeUi/ResultsWatcher',
                'catchCreatedDeliveryExecutionEvent'
            )
        ),
        'oat\\taoTests\\models\\event\\TestChangedEvent' => array(
            array(
                'taoOutcomeUi/ResultsWatcher',
                'catchTestChangedEvent'
            )
        )
    )
));

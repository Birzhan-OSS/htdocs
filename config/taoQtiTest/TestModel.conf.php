<?php
/**
 * Default config header created during install
 */

return new oat\taoQtiTest\models\TestModelService(array(
    'exportHandlers' => array(
        new oat\taoQtiTest\models\export\metadata\TestMetadataByClassExportHandler(),
        new taoQtiTest_models_classes_export_TestExport(),
        new taoQtiTest_models_classes_export_TestExport22()
    ),
    'importHandlers' => array(
        new taoQtiTest_models_classes_import_TestImport()
    ),
    'CompilationService' => new oat\taoQtiTest\models\compilation\CompilationService(array(
        'rubric-block-stylesheet-scoping' => true,
        'client-testrunner' => true
    ))
));

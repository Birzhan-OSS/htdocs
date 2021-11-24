<?php
/**
 * Default config header created during install
 */

return new oat\oatbox\config\ConfigurationService(array(
    'config' => array(
        'callbacks' => array(
            '*' => array(
                'trim'
            ),
            'http://www.tao.lu/Ontologies/generis.rdf#password' => array(
                'oat\\taoTestTaker\\models\\CsvImporter::taoSubjectsPasswordEncode'
            )
        ),
        'use_properties_for_event' => false
    )
));

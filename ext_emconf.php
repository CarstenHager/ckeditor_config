<?php
/************************************************************************
 * Extension Manager/Repository config file for ext "ckeditor_config".
 ************************************************************************/
$EM_CONF[$_EXTKEY] = array(
    'title' => 'ckeditor config',
    'description' => 'Base extension for project "ckeditor_config"',
    'category' => 'extension',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.6.0-8.99.99',
            'fluid_styled_content' => '8.6.0-8.99.99',
            'rte_ckeditor' => '8.6.0-8.99.99'
        ),
        'conflicts' => array(
            'css_styled_content' => '*'
        ),
    ),
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Carsten Hager',
    'author_email' => 'ch@lab81.de',
    'author_company' => 'Lab81 Medienagentur',
    'version' => '1.0.1',
);

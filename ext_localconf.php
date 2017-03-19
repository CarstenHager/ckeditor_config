<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/***************
 * Add default RTE configuration for bootstrap package
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['bootstrap'] = 'EXT:ckeditor_config/Configuration/PageTS/RTE/Default.yaml';

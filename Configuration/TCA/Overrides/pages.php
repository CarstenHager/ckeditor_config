<?php

/***************
 * Temporary variables
 */
$extensionKey = 'ckeditor_config';

/***************
 * Register PageTS
 */
 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/PageTS/Sitepackage.txt',
    'ckeditor config'
);

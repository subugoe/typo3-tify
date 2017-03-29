<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Add PageTSConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR: EXT:'.$_EXTKEY.'/Configuration/TSConfig/Page/General" extensions="ts">'
);

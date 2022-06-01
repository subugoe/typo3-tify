<?php

if (!defined('TYPO3_MODE')) {
    exit('Access denied.');
}

// Add PageTSConfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR: EXT:tify/Configuration/TSConfig/Page/General" extensions="typoscript">'
);

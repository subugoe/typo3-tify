<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3')) {
    exit('Access denied.');
}

$autoexec = static function () {
    // Add PageTSConfig
    ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="DIR: EXT:tify/Configuration/TSConfig/Page/General" extensions="typoscript">'
    );
};

$autoexec();

unset($autoexec);

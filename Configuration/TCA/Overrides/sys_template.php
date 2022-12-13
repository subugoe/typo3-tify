<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || exit('Access denied.');

ExtensionManagementUtility::addStaticFile(
    'tify',
    'Configuration/TypoScript/',
    'Tify Configuration'
);

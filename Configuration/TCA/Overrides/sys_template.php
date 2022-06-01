<?php

defined('TYPO3_MODE') || exit('Access denied.');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'tify',
    'Configuration/TypoScript/',
    'Tify Configuration'
);

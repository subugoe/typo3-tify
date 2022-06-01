<?php

defined('TYPO3_MODE') || exit('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Tify IIIF Viewer',
        'tify_tify',
        'content-textmedia',
    ],
    'CType',
    'tify'
);

$GLOBALS['TCA']['tt_content']['types']['tify_tify'] = [
    'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header,bodytext,Manifest URL,',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'rows' => 1,
                'eval' => 'required',
            ],
        ],
    ],
];

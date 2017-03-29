<?php

defined('TYPO3_MODE') || die('Access denied.');
call_user_func(
    function ($extKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
            [
                'IIIF Viewer',
                $extKey,
                'content-textmedia',
            ],
            'CType',
            $extKey
        );
        $tca = [
            'types' => [
                $extKey => [
                    'showitem' => '
                        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                        header,
                        bodytext,Manifest URL,
                    ',
                    'columnsOverrides' => [
                        'bodytext' => [
                            'config' => [
                                'rows' => 1,
                                'eval' => 'required',
                            ],
                        ],
                    ],
                ],
            ],
        ];
        $GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);
    },
    'tify'
);

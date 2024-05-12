<?php

use Weisgerber\DarfIchMit\Utility\TcaUtility;

defined('TYPO3') || die();
$tmp_adsense_columns = [
    'enable_adsense' => [
        'exclude' => true,
        'label' => 'Enable Adsense',
        'config' => [
            'type' => 'check',
            'renderType' => 'checkboxToggle',
			'behaviour' => [
				'allowLanguageSynchronization' => true,
			],
            'items' => [
                [
                    0 => '',
                    1 => '',
                ]
            ],
            'default' => 1,
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $tmp_adsense_columns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', ',--div--;Adsense,enable_adsense', '1,3,4');

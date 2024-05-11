<?php

defined('TYPO3') || die();
$tmp_adsense_columns = [
    'adsense_display_before' => [
        'exclude' => true,
        'label' => 'Adsense display before',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
			'foreign_table' => 'tx_adsense_domain_model_display',
			'items' => [
				[
					'label' => '---',
					'value' => '',
				],
			],
        ]
    ],
    'adsense_display_after' => [
        'exclude' => true,
        'label' => 'Adsense display after',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
			'foreign_table' => 'tx_adsense_domain_model_display',
			'items' => [
				[
					'label' => '---',
					'value' => '',
				],
			],
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tmp_adsense_columns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', ',--div--;Adsense,adsense_display_before,adsense_display_after');

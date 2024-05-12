<?php

use Weisgerber\Adsense\Domain\Model\Display;
use Weisgerber\DarfIchMit\Utility\TcaUtility;

return [
	'ctrl' => TcaUtility::getController(
		Display::TABLE_NAME,
		'adsense',
		[
			'default_sortby' => 'ORDER BY uid ASC',
			'searchFields' => '',
			'label' => 'title'
		]
	),
	'palettes' => TcaUtility::getPalettes([

	]),
	'types' => [
		'1' => [
			'showitem' =>
				TcaUtility::tab(
					null,
					[
						'title','code'
					]
				)
		],
	],
	'columns' => \nn\t3::TCA()->createConfig(
		Display::TABLE_NAME,
		[],
		[
			'title' => [
				'exclude' => true,
				'label' => "Title",
				'config' => TcaUtility::getInput(true),
			],
			'code' => [
				'exclude' => true,
				'label' => "Title",
				'config' => TcaUtility::getText(true),
			],
		]
	),
];

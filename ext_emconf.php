<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'google Adsense',
    'description' => 'Inserts google Adsense ad units before or after other content elements',
    'category' => 'frontend',
    'author' => 'Mark Weisgerber',
    'author_email' => 'mark.weisgerber@outlook.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '12.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.5.0-12.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];


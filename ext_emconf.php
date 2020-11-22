<?php

/**
 * Extension Manager/Repository config file for ext "resterland".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'ResterLand WebShop',
    'description' => 'This extension is based on the sophisticated Aimeos web shop extension.',
    'category' => 'plugin',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.9.99',
            'aimeos' => '20.4.0-20.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'beta',
    'version' => '2.0.0',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'roland@resterland.ch',
    'author_company' => 'ResterLand WebAtelier'
];

<?php

/**
 * Extension Manager/Repository config file for ext "resterland".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'ResterLand WebShop',
    'description' => 'this extension is based on cart webshop extension.',
    'category' => 'plugin',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.9.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'beta',
    'version' => '1.1.0',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'roland@resterland.ch',
    'author_company' => 'ResterLand WebAtelier'
];

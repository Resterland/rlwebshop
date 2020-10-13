<?php

/**
 * Extension Manager/Repository config file for ext "resterland".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'ResterLand WebShop',
    'description' => 'This extension extends the Aimeos or cart webshop extension. I still don\'t know which one I will use.',
    'category' => 'extension',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.9.99',
            'bootstrap_package' => '11.0.0-11.9.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Resterland\\Rlwebshop\\' => 'Classes'
        ],
    ],
    'state' => 'alpha',
    'version' => '1.0.0',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Roland Fuhrer',
    'author_email' => 'roland@resterland.ch',
    'author_company' => 'ResterLand WebAtelier'
];

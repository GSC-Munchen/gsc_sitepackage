<?php

/**
 * Extension Manager/Repository config file for ext "gelb_schwarz_casino_muenchen".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Gelb-Schwarz-Casino München',
    'description' => 'sitepackage für das GSC München e.V.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Gsc\\GelbSchwarzCasinoMuenchen\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'IAS',
    'author_email' => 'ias@gsc-muenchen.de',
    'author_company' => 'GSC',
    'version' => '1.0.0',
];

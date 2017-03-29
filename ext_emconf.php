<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'tify',
    'description' => 'tify integration for TYPO3',
    'category' => 'frontend',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Ingo Pfennigstorf',
    'author_email' => 'pfennigstorf@sub.uni-goettingen.de',
    'author_company' => 'SUB Uni-Göttingen',
    'constraints' => [
        'depends' => [
                'typo3' => '7.6.0-8.7.99',
            ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

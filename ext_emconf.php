<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'tify',
    'description' => 'tify integration for TYPO3',
    'category' => 'frontend',
    'version' => '0.20.5',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Ingo Pfennigstorf',
    'author_email' => 'pfennigstorf@sub.uni-goettingen.de',
    'author_company' => 'SUB Uni-Göttingen',
    'constraints' => [
        'depends' => [
                'typo3' => '9.5.0-10.4.99',
            ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

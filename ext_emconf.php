<?php

$EM_CONF['tify'] = [
    'title' => 'tify',
    'description' => 'tify integration for TYPO3',
    'category' => 'frontend',
    'version' => '0.33.0',
    'state' => 'stable',
    'author' => 'Ingo Pfennigstorf',
    'author_email' => 'pfennigstorf@sub.uni-goettingen.de',
    'author_company' => 'SUB Uni-Göttingen',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

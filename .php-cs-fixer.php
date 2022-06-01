<?php

$finder = PhpCsFixer\Finder::create()
    ->ignoreVCSIgnored(true)
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);

<?php

declare(strict_types=1);
use Rector\Config\RectorConfig;
use Ssch\TYPO3Rector\Set\Typo3LevelSetList;

return RectorConfig::configure()
    ->withParallel()
    ->withPaths([
        __DIR__.'/Configuration',
        __DIR__.'/Resources',
        __DIR__.'/*.php',
    ])
    ->withPhpSets()
    ->withPreparedSets(codeQuality: true, codingStyle: true)
    ->withSets([
        Typo3LevelSetList::UP_TO_TYPO3_12,
    ]);

<?php

declare(strict_types=1);
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Ssch\TYPO3Rector\Set\Typo3LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->parallel();

    $rectorConfig->paths([
        __DIR__.'/Configuration',
        __DIR__.'/Resources',
        __DIR__.'/*.php',
    ]);

    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::PHP_80,
        Typo3LevelSetList::UP_TO_TYPO3_11,
    ]);
};

<?php

declare(strict_types=1);
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Ssch\TYPO3Rector\Set\Typo3SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->parallel();

    $rectorConfig->paths([
        __DIR__.'/Configuration',
        __DIR__.'/Resources',
        __DIR__.'/*.php',
    ]);

    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::PHP_74,
        Typo3SetList::TCA_104,
        Typo3SetList::TYPOSCRIPT_CONDITIONS_104,
    ]);
};

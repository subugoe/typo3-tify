<?php

declare(strict_types=1);

use a9f\Fractor\Configuration\FractorConfiguration;
use a9f\Fractor\ValueObject\Indent;
use a9f\FractorXml\Configuration\XmlProcessorOption;
use a9f\Typo3Fractor\Set\Typo3LevelSetList;

return FractorConfiguration::configure()
    ->withPaths([
        __DIR__.'/Configuration',
        __DIR__.'/Resources',
        __DIR__.'/public',
    ])
    ->withSets([
        Typo3LevelSetList::UP_TO_TYPO3_12,
    ])
    ->withRules([
    ])
    ->withSkip([
    ])
    ->withOptions([
        XmlProcessorOption::INDENT_CHARACTER => Indent::STYLE_SPACE,
        XmlProcessorOption::INDENT_SIZE => 4,
    ]);

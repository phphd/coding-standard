<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\CodeQuality\Rector\ClassMethod\LocallyCalledStaticMethodToNonStaticRector;
use Rector\CodeQuality\Rector\If_\ExplicitNullableObjectInstanceRector;
use Rector\CodingStyle\Rector\Catch_\CatchExceptionNameMatchingTypeRector;
use Rector\Config\RectorConfig;
use Rector\Instanceof_\Rector\Ternary\FlipNegatedTernaryInstanceofRector;
use Rector\PHPUnit\CodeQuality\Rector\Class_\PreferPHPUnitSelfCallRector;
use Rector\PHPUnit\CodeQuality\Rector\Class_\PreferPHPUnitThisCallRector;
use Rector\Set\ValueObject\LevelSetList;

return RectorConfig::configure()
    ->withPhpSets()
    ->withImportNames()
    ->withPreparedSets(...\array_fill(0, 999, true))
    ->withSets([LevelSetList::UP_TO_PHP_86])
    ->withSkip([
        CatchExceptionNameMatchingTypeRector::class,
        LocallyCalledStaticMethodToNonStaticRector::class,
        ExplicitNullableObjectInstanceRector::class,
    ])
    ->withRules([
        FlipNegatedTernaryInstanceofRector::class,
        InlineConstructorDefaultToPropertyRector::class,
    ])
    ->withSkip([PreferPHPUnitThisCallRector::class])
    ->withRules([PreferPHPUnitSelfCallRector::class])
;

<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\CodeQuality\Rector\ClassMethod\LocallyCalledStaticMethodToNonStaticRector;
use Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector;
use Rector\CodingStyle\Rector\Catch_\CatchExceptionNameMatchingTypeRector;
use Rector\Config\RectorConfig;
use Rector\Instanceof_\Rector\Ternary\FlipNegatedTernaryInstanceofRector;
use Rector\Naming\Rector\Assign\RenameVariableToMatchMethodCallReturnTypeRector;
use Rector\Naming\Rector\Class_\RenamePropertyToMatchTypeRector;
use Rector\Naming\Rector\ClassMethod\RenameParamToMatchTypeRector;
use Rector\Naming\Rector\ClassMethod\RenameVariableToMatchNewTypeRector;
use Rector\Naming\Rector\Foreach_\RenameForeachValueVariableToMatchMethodCallReturnTypeRector;
use Rector\PHPUnit\CodeQuality\Rector\Class_\PreferPHPUnitSelfCallRector;
use Rector\PHPUnit\CodeQuality\Rector\Class_\PreferPHPUnitThisCallRector;
use Rector\Set\ValueObject\LevelSetList;

return RectorConfig::configure()
    ->withPhpSets()
    ->withImportNames()
    ->withPreparedSets(...\array_fill(0, 999, true))
    ->withSets([LevelSetList::UP_TO_PHP_86])
    ->withSkip([
        RenameParamToMatchTypeRector::class,
        RenamePropertyToMatchTypeRector::class,
        RenameVariableToMatchMethodCallReturnTypeRector::class,
        RenameVariableToMatchNewTypeRector::class,
        RenameForeachValueVariableToMatchMethodCallReturnTypeRector::class,
        CatchExceptionNameMatchingTypeRector::class,
        LocallyCalledStaticMethodToNonStaticRector::class,
        FlipTypeControlToUseExclusiveTypeRector::class,
    ])
    ->withRules([
        FlipNegatedTernaryInstanceofRector::class,
        InlineConstructorDefaultToPropertyRector::class,
    ])
    ->withSkip([PreferPHPUnitThisCallRector::class])
    ->withRules([PreferPHPUnitSelfCallRector::class])
;

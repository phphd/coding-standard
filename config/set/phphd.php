<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Basic\SingleLineEmptyBodyFixer;
use PhpCsFixer\Fixer\CastNotation\CastSpacesFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfStaticAccessorFixer;
use PhpCsFixer\Fixer\ControlStructure\SimplifiedIfReturnFixer;
use PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\FunctionNotation\FopenFlagsFixer;
use PhpCsFixer\Fixer\FunctionNotation\NullableTypeDeclarationForDefaultNullValueFixer;
use PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocOrderByValueFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTagCasingFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitStrictFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitTestCaseStaticMethodCallsFixer;
use PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer;
use PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer;
use Symplify\CodingStandard\Fixer\Spacing\StandaloneLinePromotedPropertyFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([SetList::COMMON]);
    $ecsConfig->dynamicSets([
        '@PhpCsFixer',
        '@PHPUnit100Migration:risky',
        '@PHP82Migration',
        '@PhpCsFixer:risky',
    ]);
    $ecsConfig->sets([
        SetList::PSR_12,
        SetList::CLEAN_CODE,
    ]);

    $ecsConfig->rulesWithConfiguration([
        YodaStyleFixer::class => [
            'always_move_variable' => true,
        ],
        ConcatSpaceFixer::class => [
            'spacing' => 'none',
        ],
        CastSpacesFixer::class => [
            'space' => 'none',
        ],
        PhpdocAlignFixer::class => [
            'align' => 'left',
        ],
        TrailingCommaInMultilineFixer::class => [
            'elements' => [
                'arrays',
                'arguments',
                'match',
                'parameters',
            ],
        ],
        OrderedImportsFixer::class => [
            'imports_order' => [
                'class',
                'function',
                'const',
            ],
        ],
        GlobalNamespaceImportFixer::class => [
            'import_classes' => true,
            'import_functions' => true,
            'import_constants' => false,
        ],
        MultilineWhitespaceBeforeSemicolonsFixer::class => [
            'strategy' => 'no_multi_line',
        ],
        BlankLineBeforeStatementFixer::class => [
            'statements' => [
                'break',
                'case',
                'continue',
                'declare',
                'default',
                'do',
                'for',
                'foreach',
                'if',
                'include',
                'include_once',
                'require',
                'require_once',
                'return',
                'switch',
                'throw',
                'try',
                'while',
                'yield',
                'yield_from',
            ],
        ],
        ClassAttributesSeparationFixer::class => [
            'elements' => [
                'property' => 'one',
                'method' => 'one',
            ],
        ],
        PhpdocLineSpanFixer::class => [
            'method' => 'single',
            'property' => 'single',
            'const' => 'single',
        ],
        ClassDefinitionFixer::class => [
            'single_item_single_line' => true,
            'multi_line_extends_each_single_line' => true,
        ],
        PhpdocTypesOrderFixer::class => [
            'sort_algorithm' => 'none',
        ],
        PhpUnitTestCaseStaticMethodCallsFixer::class => [
            'call_type' => 'self',
        ],
        FopenFlagsFixer::class => [
            'b_mode' => true,
        ],
        PhpdocOrderByValueFixer::class => [
            'annotations' => [],
        ],
    ]);
    $ecsConfig->rules([
        SingleQuoteFixer::class,
        SelfStaticAccessorFixer::class,
        SimplifiedIfReturnFixer::class,
        PhpdocTagCasingFixer::class,
        NullableTypeDeclarationForDefaultNullValueFixer::class,
        DeclareStrictTypesFixer::class,
        StrictParamFixer::class,
        StrictComparisonFixer::class,
        PhpUnitStrictFixer::class,
        NoUnusedImportsFixer::class,
        StandaloneLinePromotedPropertyFixer::class,
    ]);

    $ecsConfig->skip([
        PhpdocToCommentFixer::class,
        SingleLineEmptyBodyFixer::class,
        NotOperatorWithSuccessorSpaceFixer::class,
    ]);
};

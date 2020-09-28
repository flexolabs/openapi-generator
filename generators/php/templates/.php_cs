<?php

declare(strict_types = 1);

$finder = PhpCsFixer\Finder::create()
    ->exclude('var')
    ->exclude('vendor')
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setUsingCache(false)
    ->setRules(
        [
            '@DoctrineAnnotation' => true,
            '@PHP71Migration:risky' => true,
            '@PHP70Migration:risky' => true,
            '@PHP56Migration' => true,
            '@PHPUnit75Migration:risky' => true,
            '@Symfony' => true,
            '@Symfony:risky' => true,
            'array_syntax' => ['syntax' => 'short'],
            'header_comment' => ['header' => ''],
            'date_time_immutable' => true,
            'declare_strict_types' => true,
            'dir_constant' => true,
            // 'final_class' => true,
            'final_internal_class' => true,
            'general_phpdoc_annotation_remove' => ['@author'],
            'mb_str_functions' => true,
            'modernize_types_casting' => true,
            'native_function_invocation' => ['include' => ['@compiler_optimized']],
            'no_multiline_whitespace_before_semicolons' => true,
            'no_php4_constructor' => true,
            'no_short_echo_tag' => true,
            // 'no_useless_comment' => true,
            'no_useless_else' => true,
            'no_useless_return' => true,
            'no_superfluous_phpdoc_tags' => true,
            'not_operator_with_space' => true,
            'not_operator_with_successor_space' => true,
            'ordered_class_elements' => true,
            'ordered_imports' => true,
            'ordered_interfaces' => true,
            'php_unit_construct' => true,
            // 'php_unit_strict' => true,
            'php_unit_test_case_static_method_calls' => true,
            'php_unit_size_class' => true,
            'phpdoc_add_missing_param_annotation' => true,
            'phpdoc_var_without_name' => false,
            'phpdoc_order' => true,
            'phpdoc_to_comment' => false,
            'phpdoc_to_return_type' => true,
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_first'
            ],
            'php_unit_internal_class' => true,
            'psr4' => true,
            'random_api_migration' => true,
            'semicolon_after_instruction' => true,
            'static_lambda' => true,
            'strict_comparison' => true,
            'strict_param' => true,
            'yoda_style' => false,
        ]
    )
    ->setFinder($finder);
<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('node_modules')
    ->exclude('vendor')
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'phpdoc_no_empty_return' => false,
        'array_syntax' => ['syntax' => 'short'],
        'yoda_style' => false,
        'cast_spaces' => true,
        'new_with_braces' => true,
        'concat_space' => ['spacing' => 'one'],
        'not_operator_with_space' => false,
        'blank_line_before_return' => false,
        'blank_line_before_statement' => [
            'break',
            'continue',
            'declare',
            'return',
            'throw',
            'try',
        ],
        'method_argument_space' => [
            'ensure_fully_multiline' => true,
        ],
        'not_operator_with_successor_space' => true,
        'ordered_imports' => ['sort_algorithm' => 'length'],
        'combine_consecutive_unsets' => true,
        'linebreak_after_opening_tag' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_extra_consecutive_blank_lines' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_whitespace_in_blank_line' => true,
        'no_spaces_around_offset' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_whitespace_before_comma_in_array' => true,
        'normalize_index_brace' => true,
        'phpdoc_indent' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'general_phpdoc_annotation_remove' => [],
        'no_superfluous_phpdoc_tags' => false,
        'single_quote' => true,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline_array' => true,
        'trim_array_spaces' => true,
        'no_break_comment' => false,
        'blank_line_before_statement' => true,
    ])
    ->setFinder($finder);

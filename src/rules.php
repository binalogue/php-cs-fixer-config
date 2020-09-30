<?php

/**
 * Reference: https://github.com/FriendsOfPHP/PHP-CS-Fixer
 * Examples: https://mlocati.github.io/php-cs-fixer-configurator/#version:2.16
 *
 * Config from Laravel Shift: https://gist.github.com/laravel-shift/cab527923ed2a109dda047b97d53c200
 *
 * Last revision: v2.16.4
 */
return [
    '@PSR1' => true,
    '@PSR2' => true,
    '@PHP70Migration' => true,
    '@PHP71Migration' => true,
    '@PHP73Migration' => true,
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'binary_operator_spaces' => [
        'default' => 'single_space',
        'operators' => ['=>' => null],
    ],
    'blank_line_after_opening_tag' => true, // @Symfony
    'blank_line_before_statement' => [
        'statements' => ['return'],
    ],
    'cast_spaces' => true, // @Symfony
    'class_attributes_separation' => [
        'elements' => ['method'],
    ],
    'concat_space' => true, // @Symfony
    'declare_equal_normalize' => true, // @Symfony
    'fully_qualified_strict_types' => true,
    'function_typehint_space' => true, // @Symfony
    'heredoc_to_nowdoc' => true,
    'include' => true, // @Symfony
    'increment_style' => [
        'style' => 'post',
    ],
    'linebreak_after_opening_tag' => true,
    'lowercase_cast' => true, // @Symfony
    'lowercase_constants' => true,
    'lowercase_static_reference' => true, // @Symfony
    'magic_constant_casing' => true, // @Symfony
    'magic_method_casing' => true, // @Symfony
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],
    'native_function_casing' => true, // @Symfony
    'no_alias_functions' => true, // @Symfony
    'no_blank_lines_after_class_opening' => true, // @Symfony
    'no_blank_lines_after_phpdoc' => true, // @Symfony
    'no_empty_phpdoc' => true, // @Symfony
    'no_empty_statement' => true, // @Symfony
    'no_extra_blank_lines' => [
        'tokens' => [
            'extra',
            'throw',
            'use',
            'use_trait',
        ],
    ],
    'no_leading_import_slash' => true, // @Symfony
    'no_leading_namespace_whitespace' => true, // @Symfony
    'no_mixed_echo_print' => true, // @Symfony
    'no_multiline_whitespace_around_double_arrow' => true, // @Symfony
    'no_short_bool_cast' => true, // @Symfony
    'no_singleline_whitespace_before_semicolons' => true, // @Symfony
    'no_spaces_around_offset' => true, // @Symfony
    'no_trailing_comma_in_list_call' => true, // @Symfony
    'no_trailing_comma_in_singleline_array' => true, // @Symfony
    'no_unneeded_control_parentheses' => true, // @Symfony
    'no_unreachable_default_argument_value' => true, // @Symfony
    'no_unused_imports' => true,
    'no_useless_return' => true,
    'no_whitespace_before_comma_in_array' => true, // @Symfony
    'no_whitespace_in_blank_line' => true, // @Symfony
    'normalize_index_brace' => true, // @Symfony
    'not_operator_with_successor_space' => true,
    'object_operator_without_whitespace' => true, // @Symfony
    'ordered_imports' => true, // @Symfony
    'phpdoc_indent' => true, // @Symfony
    'phpdoc_inline_tag' => true, // @Symfony
    'phpdoc_no_access' => true, // @Symfony
    'phpdoc_no_package' => true, // @Symfony
    'phpdoc_no_useless_inheritdoc' => true, // @Symfony
    'phpdoc_scalar' => true, // @Symfony
    'phpdoc_single_line_var_spacing' => true, // @Symfony
    'phpdoc_summary' => true, // @Symfony
    'phpdoc_to_comment' => true, // @Symfony
    'phpdoc_trim' => true, // @Symfony
    'phpdoc_types' => true, // @Symfony
    'phpdoc_var_without_name' => true, // @Symfony
    'psr4' => true, // @Symfony
    'self_accessor' => true, // @Symfony
    'short_scalar_cast' => true, // @Symfony
    'simplified_null_return' => false,
    'single_blank_line_before_namespace' => true, // @Symfony
    'single_line_comment_style' => [
        'comment_types' => ['hash'],
    ],
    'single_quote' => true, // @Symfony
    'space_after_semicolon' => true, // @Symfony
    'standardize_not_equals' => true, // @Symfony
    'strict_comparison' => true, // added by Mikel
    'ternary_operator_spaces' => true, // @Symfony
    'trailing_comma_in_multiline_array' => true, // @Symfony
    'trim_array_spaces' => true, // @Symfony
    'unary_operator_spaces' => true, // @Symfony
    'whitespace_after_comma_in_array' => true, // @Symfony
    'yoda_style' => false, // added by Mikel
];

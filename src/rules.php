<?php

/**
 * Reference: https://github.com/FriendsOfPHP/PHP-CS-Fixer
 * Examples: https://mlocati.github.io/php-cs-fixer-configurator/#version:2.16
 *
 * Last revision: v2.16.4
 */
return [
    '@PSR1' => true,
    '@PSR2' => true,
    '@PHP70Migration' => true,
    '@PHP71Migration' => true,
    '@PHP73Migration' => true,
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => true,
    'blank_line_before_statement' => true,
    'class_attributes_separation' => ['elements' => ['method']],
    'increment_style' => ['style' => 'post'],
    'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
    'no_unused_imports' => true,
    'not_operator_with_successor_space' => true,
    'ordered_imports' => ['sort_algorithm' => 'alpha'],
    'phpdoc_scalar' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_var_without_name' => true,
    'psr4' => true,
    'strict_comparison' => true,
    'trailing_comma_in_multiline_array' => true,
    'unary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
    'yoda_style' => false,
];

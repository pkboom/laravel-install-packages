<?php

return (new PhpCsFixer\Config())
    ->setUsingCache(false)
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'increment_style' => ['style' => 'post'],
        'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
        'semicolon_after_instruction' => false,
        'strict_comparison' => true,
        'yoda_style' => false,
        'allow_mixed' => true, // somehow @Symfony won't work
        'allow_unused_params' => true, // somehow @Symfony won't work
    ]);

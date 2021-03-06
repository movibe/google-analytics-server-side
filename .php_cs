<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->notName('*.md')
    ->notName('composer.*')
    ->notName('phpunit.xml*')
    ->notName('.git*')
    ->notName('.php_cs')
    ->in(__DIR__);

return Symfony\CS\Config\Config::create()
    ->fixers(
        array(
            'indentation',
            'linefeed',
            'trailing_spaces',
            'unused_use',
            'php_closing_tag',
            'short_tag',
            'visibility',
            'braces',
            'eof_ending',
            'extra_empty_lines',
            'include',
            'psr0',
            'control_spaces',
            'elseif'
        )
    )->finder($finder);
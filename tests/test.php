<?php

require_once "../vendor/autoload.php";

$expression = "foo.bar.baz < 50 || foo.bar.fuz > 10";

$parser = new \BPL\ExpressionParser([
    'foo' => [
        'bar' => [
            'baz' => 42,
            'fuz' => 11
        ]
    ]
]);

print_r($parser->parse($expression));
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$fie = dirname(__FILE__) . '/output.txt';
$data = 'hello, it\'s' . date('d/m/Y H:i:s') . '\n';
file_put_contents($fie, $data, FILE_APPEND);
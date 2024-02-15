<?php
include __DIR__ .'/bootstrap.php';

$action = $argv[1] ?? 'Action';
$className = 'App\\'.$action;
$arg = $argv[2] ?? '';

(new $className)($arg);

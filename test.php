<?php

ini_set('date.timezone', 'UTC');
ini_set('memory_limit', '2048M');
gc_enable();

if ($argv[1] === 'brainy3') {
    require __DIR__ . '/vendor/autoload.php';
}

$harness = './harnesses/' . $argv[1] . '.php';
require_once $harness;

$cases = scandir('./testcases');
foreach ($cases as $case) {
    if ($case[0] === '.') continue;

    echo "\n\nTestcase '$case'\n========================\n";
    $durations = [];
    for ($i = 0; $i < 500; $i++) {
        $start = microtime(true) * 1000;
        render(__DIR__ . '/testcases/' . $case . '/');
        $end = microtime(true) * 1000;
        $durations[] = $end - $start;
        if ($i % 100 === 0) {
            echo "Iteration $i...\n";
        }
    }

    $average = array_sum($durations) / count($durations);
    echo "$case: {$average}ms\n";

}

<?php

ini_set('date.timezone', 'UTC');
ini_set('memory_limit', '2048M');
ini_set('xdebug.max_nesting_level', '-1');
gc_enable();

if ($argv[1] === 'brainy3') {
    require __DIR__ . '/vendor/autoload.php';
}

$shouldProfile = isset($argv[2]) && $argv[2] === '--profile';
if ($shouldProfile) {
    echo "Profile mode enabled.\n";
}

$shouldSingleOutTest = isset($argv[2]) && $argv[2] === '--test';
if ($shouldSingleOutTest) {
    $test = $argv[3];
    echo "Singling out test '$test'.\n";
}

$harness = './harnesses/' . $argv[1] . '.php';
require_once $harness;

$count = $shouldSingleOutTest ? 250 : $shouldProfile ? 5 : 250;

$cases = scandir('./testcases');
foreach ($cases as $case) {
    if ($case[0] === '.') continue;
    if ($shouldSingleOutTest && $case !== $test) continue;

    echo "\n\nTestcase '$case'\n========================\n";
    $durations = [];
    for ($i = 0; $i < $count; $i++) {
        $start = microtime(true);
        render(__DIR__ . '/testcases/' . $case . '/');
        $end = microtime(true);
        $durations[] = ($end * 1000) - ($start * 1000);
        if ($i % 100 === 0) {
            echo "Iteration $i...\n";
        }
    }

    $sum = array_sum($durations) - min($durations) - max($durations);
    $average = $sum / (count($durations) - 2);
    echo "$case: {$average}ms\n";

}

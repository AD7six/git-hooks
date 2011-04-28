#!/usr/bin/env php
<?php

$output = array();
$return = 0;
$exit_status = 0;
exec("phpunit --stop-on-failure tests/smoke.test.php", $output, $return);

if ($return != 0) {
    echo implode("\n", $output) . "\n";
    $exit_status = 1;
    exit($exit_status);
}

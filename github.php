<?php
    $output = null;
    
    $output = shell_exec('git pull 2>&1', $output);
    error_log(print_r($output, true), 3, 'errr.log');
    error_log('push made', 3, 'errr.log');
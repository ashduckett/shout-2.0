<?php
    shell_exec('su ');
    
    $output = null;
    
    $output = shell_exec('git pull 2>&1');
    
    // Returns ashduckett. ashduckett is allowed to do this stuff.
    $user = shell_exec('whoami 2>&1');
    
    $dir = shell_exec('$PWD 2>&1');
    error_log($dir, 3, 'errr.log');
    
    error_log(print_r($user, true), 3, 'errr.log');
    
    error_log(print_r($output, true), 3, 'errr.log');
    error_log('push made', 3, 'errr.log');
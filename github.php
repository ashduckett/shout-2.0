<?php
    shell_exec('su ');
    
    $output = null;
    
    $output = shell_exec('git pull 2>&1');
    $user = shell_exec('whoami 2>&1');
    
    
    error_log(print_r($user, true), 3, 'errr.log');
    
    error_log(print_r($output, true), 3, 'errr.log');
    error_log('push made', 3, 'errr.log');
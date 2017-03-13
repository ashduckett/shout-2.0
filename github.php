<?php
    $output = `git pull`;
    error_log(print_r($output, true), 3, 'errr.log');
    error_log('push made', 3, 'errr.log');
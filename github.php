<?php
    $output = `git pull`;
    error_log(print_r($output, true), 3, 'errr.log');
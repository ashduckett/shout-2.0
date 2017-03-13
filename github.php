<?php
    $output = `git pull`;
    error_log($output, 3, 'errr.log');
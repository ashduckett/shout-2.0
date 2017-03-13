<?php
    $old_path = getcwd();
    chdir('/home/ashduckett/public_html/shout-2.0');
    $output = shell_exec('sh github.sh 2>&1');
    chdir($old_path);
    echo "<pre>$output</pre>";

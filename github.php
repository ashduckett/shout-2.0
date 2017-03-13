<?php

echo 'start';
$old_path = getcwd();
echo '2';
chdir('/home/ashduckett/public_html/shout-2.0');
echo '3';
$output = shell_exec('github.sh 2>&1');
echo '4';
chdir($old_path);
echo '5';

print_r($output, true);
echo '6';
echo "<pre>$output</pre>";

echo '7';
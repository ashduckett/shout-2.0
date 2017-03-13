<?php

echo 'start';
$old_path = getcwd();
chdir('/home/ashduckett/public_html/shout-2.0');
$output = shell_exec('github.sh var1 var2');
chdir($old_path);

print_r($output, true);
echo "<pre>$output</pre>";
<?php


$old_path = getcwd();
chdir('/home/ashduckett/public_html/shout-2.0');
$output = shell_exec('./github.sh var1 var2');
chdir($old_path);
echo "<pre>$output</pre>";
<?php
$out = [];
exec('ls -ld /var/www/html/gim360/app/Views 2>&1', $out);
echo "<pre>" . implode("\n", $out) . "</pre>";

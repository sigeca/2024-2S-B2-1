<?php
$out = [];
exec('ls -ld /var/www/html/gim360/app && ls -ld /var/www/html/gim360/app/Controllers && ls -ld /var/www/html/gim360/app/Models 2>&1', $out);
echo "<pre>" . implode("\n", $out) . "</pre>";

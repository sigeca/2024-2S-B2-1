<?php
$out = [];
exec('ls -ld /var/www/html/gim360 && ls -ld /var/www/html/gim360/.git && ls -ld /var/www/html/gim360/.git/objects && ls -la /var/www/html/gim360/.git/objects | head -n 10 2>&1', $out);
echo "<pre>" . implode("\n", $out) . "</pre>";

<?php
$out = [];
$cmds = [
    'ls -l /var/www/html/gim360/app/Views/layout/main.php 2>&1',
    'ls -ld /var/www/html/gim360/app/Views/layout 2>&1'
];
foreach ($cmds as $cmd) {
    $c_out = [];
    exec($cmd, $c_out, $ret);
    $out[] = "=== $cmd (exit $ret) ===";
    $out[] = implode("\n", $c_out);
}
echo "<pre>" . implode("\n", $out) . "</pre>";

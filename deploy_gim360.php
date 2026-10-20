<?php
$out = [];
$cmds = [
    'cd /var/www/html/gim360 && git checkout -- . 2>&1',
    'cd /var/www/html/gim360 && git clean -fd 2>&1',
    'cd /var/www/html/gim360 && git status 2>&1',
    'cd /var/www/html/gim360 && ls -la app/Models/*Personalizado* 2>&1'
];
foreach ($cmds as $cmd) {
    $c_out = [];
    exec($cmd, $c_out, $ret);
    $out[] = "=== $cmd (exit $ret) ===";
    $out[] = implode("\n", $c_out);
}
echo "<pre>" . implode("\n", $out) . "</pre>";

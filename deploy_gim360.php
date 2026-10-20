<?php
set_time_limit(180);
$out = [];
$repoUrl = base64_decode('aHR0cHM6Ly9naHBfZW1pYVFnUDA5dEs3dTM1a3lwc0NVeVFtYmM3a05PMENVMUZsQGdpdGh1Yi5jb20vc2lnZWNhL2dpbTM2MC5naXQ=');

$cmds = [
    'rm -rf /tmp/gim360_sync',
    'git clone ' . escapeshellarg($repoUrl) . ' /tmp/gim360_sync 2>&1',
    'rm -rf /var/www/html/gim360/app/Views/programacliente',
    'cp -rf /tmp/gim360_sync/app/Views/programacliente /var/www/html/gim360/app/Views/ 2>&1',
    'rm -rf /tmp/gim360_sync',
    'cd /var/www/html/gim360 && git status 2>&1'
];

foreach ($cmds as $cmd) {
    $c_out = [];
    exec($cmd, $c_out, $ret);
    $out[] = "=== $cmd (exit $ret) ===";
    $out[] = implode("\n", $c_out);
}

echo "<pre>" . implode("\n", $out) . "</pre>";

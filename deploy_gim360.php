<?php
// Fix permissions and pull gim360
$pass = 'PIWIIB1234';
$cmd = 'echo ' . escapeshellarg($pass) . ' | sudo -S chown -R apache:apache /var/www/html/gim360 2>&1';
exec($cmd, $out1, $ret1);

$cmd2 = 'cd /var/www/html/gim360 && git config --global --add safe.directory /var/www/html/gim360 && git pull origin main 2>&1';
exec($cmd2, $out2, $ret2);

echo "=== CHOWN RESULT (ret: $ret1) ===\n";
echo implode("\n", $out1) . "\n";
echo "=== GIT PULL RESULT (ret: $ret2) ===\n";
echo implode("\n", $out2) . "\n";

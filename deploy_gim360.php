<?php
$out = [];
$cmds = [
    'ls -la /var/www/html/gim360/app/Models/*Personalizada* 2>&1',
    'grep -n "planejerciciopersonalizado" /var/www/html/gim360/app/Controllers/Api/GimApiController.php 2>&1',
    'grep -n "clonarProgramaModeloACliente" /var/www/html/gim360/app/Models/ProgramaClienteModel.php 2>&1',
    'ls -l /var/www/html/gim360/app/Views/programacliente/programacliente_record.php 2>&1'
];
foreach ($cmds as $cmd) {
    $c_out = [];
    exec($cmd, $c_out, $ret);
    $out[] = "=== $cmd (exit $ret) ===";
    $out[] = implode("\n", $c_out);
}
echo "<pre>" . implode("\n", $out) . "</pre>";

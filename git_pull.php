<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'git_pull') {
    $output = [];
    $return_var = -1;
    $directory = '/var/www/html/apple5a/';
    $command = 'git pull';

    // Cambiar al directorio antes de ejecutar el comando
    chdir($directory);

    // Ejecutar el comando git pull
    exec($command . ' 2>&1', $output, $return_var);

    // Enviar la salida como respuesta (puedes formatearla mejor)
    echo "<h3>Resultado de Git Pull:</h3>";
    echo "<pre>";
    foreach ($output as $line) {
        echo htmlspecialchars($line) . "\n";
    }
    echo "</pre>";
    echo "<p>Código de retorno: " . htmlspecialchars($return_var) . "</p>";
} else {
    // Mostrar un formulario simple para activar el git pull
    echo '<form method="post">';
    echo '<input type="hidden" name="action" value="git_pull">';
    echo '<button type="submit">Ejecutar Git Pull</button>';
    echo '</form>';
}
?>

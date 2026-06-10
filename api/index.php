<?php
// Mapeo automático de rutas para Vercel
function fix_paths($buffer) {
    return str_replace('/home/arturo/www/', __DIR__ . '/../', $buffer);
}

// Empezamos a capturar la salida para evitar errores de cabeceras
ob_start('fix_paths');

// Cargamos el archivo original
require_once __DIR__ . '/../index.php';
?>

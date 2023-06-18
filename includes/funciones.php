<?php

require "app.php";

function incluirTemplate(string $nombre, bool $inicio = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}

function insertDivAfterBody($phpFile, $divClass)
{
    // Leer el contenido del archivo PHP
    $content = file_get_contents($phpFile);

    // Crear el elemento div con la clase proporcionada
    $div = '<div class="' . $divClass . '">';

    // Encontrar la posición del elemento <body> en el contenido
    $bodyPos = strpos($content, '<body>');

    if ($bodyPos !== false) {
        // Insertar el div después del elemento <body>
        $content = substr_replace($content, $div, $bodyPos + 6, 0);

        // Guardar el contenido modificado en el archivo PHP
        file_put_contents($phpFile, $content);

        echo 'Se ha insertado el div correctamente.';
    } else {
        echo 'No se encontró el elemento <body> en el archivo PHP.';
    }
}


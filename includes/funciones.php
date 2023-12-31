<?php


define("TEMPLATES_URL", __DIR__ . "/templates");
define("FUNCIONES_URL", __DIR__ . "functiones");
define("CARPETA_IMAGENES", __DIR__ . "/../imagenes/");

function incluirTemplate(string $nombre, bool $inicio = false)
{
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado()
{
    session_start();

    if (!$_SESSION["login"]) {
        header("location: /");
    }

}

function debuguear($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";

    exit();
}

//escapa /sanitizar el html
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

// Validar contenido
function validarTipoContenido($tipo){
    $tipos = ["usuario", "investigacion"];
    return in_array($tipo, $tipos);
}
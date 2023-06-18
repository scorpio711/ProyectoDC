<?php
require "includes/funciones.php";
$inicio = true;
incluirTemplate("header");
?>
<script>
    cambiarClases("mi-div", "fondo-color-morado");
    cambiarClases("header", "header-morado");


    document.addEventListener('DOMContentLoaded', function() {
        const logotipoHeader = document.getElementById("logotipo");
        const logotipoFooter = document.getElementById("logotipo-footer");
        logotipoHeader.src = `build/img/bxs-cat-lila-pastel.svg`;
        logotipoHeader.alt = "logotipo-lila-pastel";
        logotipoFooter.src = "build/img/bxs-cat-lila-pastel.svg";
        logotipoFooter.alt = "logotipo-lila-pastel";
        cambiarClases("footer", "footer-morado");
    });
</script>
<main class="contenedor atencion">
    <div class="espacio"></div>
    <div class="espacio"></div>
    <div class="contenedor-texto">
        <h1>Te brindamos la ayuda que necesitas</h1>
        <p>Equipo Multidisciplinario: Abogados, Enfermeros y Psicólogos Unidos para tu Bienestar Integral</p>
    </div>
    <div class="contenedor-imagen">
        <img src="/build/img/annie-spratt-hCb3lIB8L8E-unsplash.webp" alt="">
    </div>
</main>
</div>
<div class="contenedor">
    <div class="espacio"></div>
    <hr>
    <div class="informacion-enfermeros">

        <h2>Enfermeros</h2>

        <div class="tab">
            <a href="javascript:void(0);" class="tablinks clickable-text" data-tab="Tab1" onclick="openTab(event, 'Tab1')">Pestaña 1</a>
            <a href="javascript:void(0);" class="tablinks clickable-text" onclick="openTab(event, 'Tab2')">Pestaña 2</a>
            <a href="javascript:void(0);" class="tablinks clickable-text" onclick="openTab(event, 'Tab3')">Pestaña 3</a>
        </div>
        <hr>

        <div id="Tab1" class="tabcontent">
            <h2>Contenido de la Pestaña 1</h2>
            <p>Este es el contenido de la pestaña 1.</p>
        </div>

        <div id="Tab2" class="tabcontent">
            <h2>Contenido de la Pestaña 2</h2>
            <p>Este es el contenido de la pestaña 2.</p>
        </div>

        <div id="Tab3" class="tabcontent">
            <h2>Contenido de la Pestaña 3</h2>
            <p>Este es el contenido de la pestaña 3.</p>
        </div>
    </div>
</div>
</div>


<?php incluirTemplate("footer") ?>
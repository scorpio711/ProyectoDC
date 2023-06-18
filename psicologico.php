<?php
require "includes/funciones.php";
$inicio = true;
incluirTemplate("header");
?>
<script>
  cambiarClases("mi-div", "fondo-color-verde-agua");
  cambiarClases("header", "header-verde-agua");


  document.addEventListener('DOMContentLoaded', function() {
    const logotipoHeader = document.getElementById("logotipo");
    const logotipoFooter = document.getElementById("logotipo-footer");
    logotipoHeader.src = `build/img/bxs-cat-cian.svg`;
    logotipoHeader.alt = "logotipo-cian";
    logotipoFooter.src = "build/img/bxs-cat-cian.svg";
    logotipoFooter.alt = "logotipo-cian";
    cambiarClases("footer", "footer-verde-agua");
  });
</script>
<main class="contenedor atencion-psicologica">
  <div class="espacio"></div>
  <div class="espacio"></div>
  <div class="contenedor-texto">
    <h1>Centro de Atención para Enfermeros: Apoyo y Empoderamiento Profesional</h1>
    <p>En nuestro portal de Atención Integral para Enfermeros, nos dedicamos a
       brindar información valiosa y recursos especializados para el cuidado de pacientes con diabetes y colostomía.</p>
  </div>
  <div class="contenedor-imagen">
    <img src="/build/img/surface-X1GZqv-F7Tw-unsplash.webp" alt="">
  </div>
  <div class="espacio"></div>
</main>
</div>
<div class="contenedor">
  <div class="espacio"></div>
  <hr>
</div>


<?php incluirTemplate("footer") ?>
<?php
require "includes/funciones.php";
$inicio = true;
incluirTemplate("header");
?>
<script>
  cambiarClases("mi-div", "fondo-color-piel");
  cambiarClases("header", "header-piel");


  document.addEventListener('DOMContentLoaded', function() {
    const logotipoHeader = document.getElementById("logotipo");
    const logotipoFooter = document.getElementById("logotipo-footer");
    logotipoHeader.src = `build/img/bxs-cat-azul.svg`;
    logotipoHeader.alt = "logotipo-azul";
    logotipoFooter.src = "build/img/bxs-cat-azul.svg";
    logotipoFooter.alt = "logotipo-azul";
    cambiarClases("footer", "footer-piel");
  });
</script>
<main class="contenedor atencion-juridica">
  <div class="espacio"></div>
  <div class="espacio"></div>
  <div class="contenedor-texto">
    <h1>Centro de Atención para Enfermeros: Apoyo y Empoderamiento Profesional</h1>
    <p>En nuestro portal de Atención Integral para Enfermeros, nos dedicamos a
       brindar información valiosa y recursos especializados para el cuidado de pacientes con diabetes y colostomía.</p>
  </div>
  <div class="contenedor-imagen">
    <img src="/build/img/giammarco-boscaro-zeH-ljawHtg-unsplash.webp" alt="juridica">
  </div>
  <div class="espacio"></div>
</main>
</div>
<div class="contenedor">
  <div class="espacio"></div>
  <hr>
</div>


<?php incluirTemplate("footer") ?>
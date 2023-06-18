<?php
require "includes/funciones.php";
incluirTemplate("header");
?>
<script>
    // Obtener el elemento div mediante su ID
    var div = document.getElementById("mi-div");

    // Cambiar la clase del elemento
    div.removeAttribute("class");
    div.classList.add("imagen-fondo");
</script>

<main class="principal">
    <h1>Diabetes y Colostomía: Cuidado Integral y Bienestar</h1>
    <button class="boton">Accede a nuestro contenido</button>
</main>
</div> <!-- cierre imagen de fondo -->
<div class="contenedor">
    <div class="espacio"></div>
    <hr>
    <div class="apoyo-comunidad">
        <div class="contenedor-texto">
            <h2>Diabetes y colostomía: Beneficios de la comunidad de apoyo</h2>
            <div>
                <p>Conoce los beneficios de unirte a una comunidad de apoyo para personas que viven con diabetes y colostomía.</p>
                <a href="#">Acceder a atencion</a>
            </div>
        </div>
        <div>
            <img src="/build/img/emma-simpson-mNGaaLeWEp0-unsplash.webp" alt="iamgen apoyo comunidad">
        </div>
    </div>
    <hr>
    <div class="investigaciones contenedor">
        <div class="contenedor-texto">
            <h2>Nuestras investigaciones</h2>
            <div>
                <p>Las investigaciones en el cuidado de la diabetes y la colostomía buscan mejorar la calidad de vida y
                    encontrar soluciones innovadoras para quienes viven con estas condiciones.</p>
                <a href="#">Aprende sobre nuestras investigaciones</a>
            </div>
        </div>
        <div class="contenedor-multiple">
            <a href="#">
                <div class="contenedor-imagen">
                    <img src="/build/img/foto-grid3.webp" class="square-image" alt="">
                </div>
                <div>
                    <p class="nombre-investigacion">Adaptación a la colostomía</p>
                    <p>Mar 15, 2023</p>
                </div>
            </a>
            <a href="#">
                <div class="contenedor-imagen">
                    <img src="/build/img/foto-grid1.webp" class="square-image" alt="">
                </div>
                <div>
                    <p class="nombre-investigacion">Cuidado de la piel</p>
                    <p>Mar 15, 2023</p>
                </div>
            </a>
            <a href="#">
                <div class="contenedor-imagen">
                    <img src="/build/img/foto-grid2.webp" class="square-image" alt="">
                </div>
                <div>
                    <p class="nombre-investigacion">Ejercicio físico</p>
                    <p>Mar 15, 2023</p>
                </div>
            </a>
            <a href="#">
                <div class="contenedor-imagen">
                    <img src="/build/img/foto-grid4.webp" class="square-image" alt="">
                </div>
                <div>
                    <p class="nombre-investigacion">Alimentación saludable</p>
                    <p>Mar 15, 2023</p>
                </div>
            </a>
        </div>
        <hr>
        <div class="contenido-sobre-nosotros">
            <div class="contenedor-texto">
                <h2>Sobre nosotros</h2>
                <div>
                    <p>Nuestro equipo multidisciplinario está compuesto por abogados, enfermeros y psicólogos dedicados a brindar
                        un enfoque integral en el cuidado de nuestros clientes. Trabajamos de la mano para ofrecer soluciones
                        legales, atención médica especializada y apoyo emocional, proporcionando un servicio completo y personalizado.
                        Nuestro objetivo es brindar el mejor respaldo posible, abordando las necesidades legales, de salud y bienestar
                        de cada individuo de manera integral y efectiva.</p>
                    <a href="#">Mas Sobre Nosotros</a>
                </div>
            </div>
            <div class="contenedor-imagen">
                <img src="/build/img/dylan-gillis-KdeqA3aTnBY-unsplash.webp" alt="iamgen apoyo comunidad">
            </div>
        </div>
    </div>
</div>
</div>

</div>
<div class="espacio"></div>
<?php incluirTemplate("footer") ?>
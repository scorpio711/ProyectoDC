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
    <div class="apoyo-comunidad borde-superior-negro-delgado">
        <div class="contenedor-texto">
            <h2>Beneficios de la comunidad de apoyo</h2>
            <div class="mt-spacing">
                <p>Conoce los beneficios de unirte a una comunidad de apoyo para personas que viven con diabetes y colostomía.</p>
                <div class="mt-spacing">
                    <a href="#">Acceder a atencion</a>
                </div>
            </div>
        </div>
        <div class="imagen-rectangular mt-spacing">
            <img src="/build/img/emma-simpson-mNGaaLeWEp0-unsplash.webp" alt="iamgen apoyo comunidad">
        </div>
    </div>
    <div class="espacio"></div>
    <div class="contenido-sobre-nosotros borde-superior-negro-delgado contenedor-1">
        <div class="contenedor-texto-2">
            <h2>Sobre nosotros</h2>
            <div class="mt-spacing">
                <p>Nuestro equipo multidisciplinario está compuesto por abogados, enfermeros y psicólogos dedicados a brindar
                    un enfoque integral en el cuidado de nuestros clientes. Trabajamos de la mano para ofrecer soluciones
                    legales, atención médica especializada y apoyo emocional, proporcionando un servicio completo y personalizado.
                    Nuestro objetivo es brindar el mejor respaldo posible, abordando las necesidades legales, de salud y bienestar
                    de cada individuo de manera integral y efectiva.</p>
                <div class="mt-spacing enlace">
                    <a href="#">Mas Sobre Nosotros<span class="material-icons">call_made</span></a>
                </div>
            </div>
        </div>
        <div class="contenedor-imagen mt-spacing">
            <img src="/build/img/dylan-gillis-KdeqA3aTnBY-unsplash.webp" alt="iamgen apoyo comunidad">
        </div>
    </div>

</div>
<div class="tabs-enfermeros">
    <div class="informacion-enfermeros tabs contenedor">
        <div class="espacio"></div>
        <div class="contenedor-texto borde-superior-negro-delgado">
            <h3>Enfermeros</h3>
            <div class="flex-column mt-spacing">
                <p>Cuidado integral para tu bienestar físico: Servicios de enfermería para personas con diabetes y colostomía</p>
                <div class="mt-spacing enlace">
                    <a href="/enfermeros.php">Obten más informacion</a>
                </div>
            </div>
        </div>
        <div>
            <div class="tab">
                <li>
                    <a href="javascript:void(0);" class="tablinks tab-item-1" data-tab="Tab1" onclick="openTab(event, 'Tab1', 'tabcontent', 'tab-item-1')">Asesoramiento</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="tablinks tab-item-1" onclick="openTab(event, 'Tab2', 'tabcontent', 'tab-item-1')">Monitoreo</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="tablinks tab-item-1" onclick="openTab(event, 'Tab3','tabcontent', 'tab-item-1')">Habitos</a>
                </li>
            </div>
            <div id="Tab1" class="tabcontent">
                <div class="contenedor-1 mt-spacing">
                    <div class="contenedor-texto-2">
                        <p>En nuestra página, nos preocupamos por tu bienestar físico y queremos asegurarnos de que recibas el cuidado adecuado para tu diabetes
                            y colostomía. Nuestro equipo de enfermería especializado está aquí para brindarte servicios de calidad y apoyarte en tu camino hacia una vida saludable y activa.</p>
                        <div class="enlace">
                            <a href="/enfermeros.php">Apoyo Enfermeros</a>
                        </div>
                    </div>
                    <div class="contenedor-imagen-borde">
                        <img src="/build/img/nurse-helping-patient-fotor-2023062317252.webp" alt="imagen enfermeros">
                    </div>
                </div>
            </div>
            <div id="Tab2" class="tabcontent">
                <h3>Monitoreo y seguimiento</h3>
                <p>Realizaremos un seguimiento regular de tu estado de salud, incluyendo la medición de tus niveles de azúcar en la sangre, el control de tu presión arterial y el
                    monitoreo de cualquier cambio en tu estoma.</p>
            </div>

            <div id="Tab3" class="tabcontent">
                <h3>Apoyo práctico</h3>
                <p>Te enseñaremos técnicas y consejos prácticos para el cuidado de tu colostomía, incluyendo el cambio adecuado de la bolsa y la prevención de infecciones.</p>
            </div>
        </div>
    </div>
    <div class="espacio"></div>
</div>
<div class="tabs-psicologos">
    <div class="informacion-psicologos tabs contenedor">
        <div class="espacio"></div>
        <div class="contenedor-texto">
            <h3>Psicologos</h3>
            <div>
                <p>Cuidando tu bienestar emocional: Apoyo psicológico para personas con diabetes y colostomía</p>
                <a href="/psicologico.php">Obten mas informacion</a>
            </div>
        </div>

        <div>
            <div class="tab">
                <li>
                    <a href="javascript:void(0);" class="tablinks tab-item-2 primer-tab" onclick="openTab(event, 'Tab4','tabcontent2', 'tab-item-2')">Eomociones</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="tablinks tab-item-2" onclick="openTab(event, 'Tab5','tabcontent2', 'tab-item-2')">Afronta</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="tablinks tab-item-2" onclick="openTab(event, 'Tab6','tabcontent2', 'tab-item-2')">Vida</a>
                </li>
            </div>

            <div id="Tab4" class="tabcontent2">
                <div class="contenedor-1 mt-spacing">
                    <div class="contenedor-texto-2">
                        <p>En nuestra página, nos preocupamos por tu bienestar físico y queremos asegurarnos de que recibas el cuidado adecuado para tu diabetes
                            y colostomía. Nuestro equipo de enfermería especializado está aquí para brindarte servicios de calidad y apoyarte en tu camino hacia una vida saludable y activa.</p>
                        <div class="enlace">
                            <a href="/enfermeros.php">Apoyo Enfermeros</a>
                        </div>
                    </div>
                    <div class="contenedor-imagen-borde">
                        <img src="/build/img/quinton-coetzee-lzlJC_ZY0OI-unsplash-fotor-2023062422645.webp" alt="imagen enfermeros">
                    </div>
                </div>
            </div>

            <div id="Tab5" class="tabcontent2">
                <h3>Contenido de la Pestaña 2</h3>
                <p>Este es el contenido de la pestaña 2.</p>
            </div>

            <div id="Tab6" class="tabcontent2">
                <h3>Contenido de la Pestaña 3</h3>
                <p>Este es el contenido de la pestaña 3.</p>
            </div>
        </div>
    </div>
    <div class="espacio"></div>
</div>
<div class="tabs-abogados">
    <div class="informacion-abogados tabs contenedor">
        <div class="espacio"></div>
        <div class="contenedor-texto borde-superior-blanco-delgado">
            <h3>Juridico</h3>
            <div>
                <p>Protegiendo tus derechos: Asesoría jurídica para personas con diabetes y colostomía</p>
                <a href="/juridico.php">Obten informacion</a>
            </div>
        </div>
        <div>
            <div class="tab">
                <li>
                    <a href="javascript:void(0);" class="tablinks tab-item-3" data-tab="Tab7" onclick="openTab(event, 'Tab7', 'tabcontent3', 'tab-item-3')">Expertos</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="tablinks tab-item-3" onclick="openTab(event, 'tab8', 'tabcontent3', 'tab-item-3')">Defensa</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="tablinks tab-item-3" onclick="openTab(event, 'Tab9', 'tabcontent3', 'tab-item-3')">Orientacion</a>
                </li>
            </div>
            <div id="Tab7" class="tabcontent3">
                <div class="contenedor-1 mt-spacing">
                    <div class="contenedor-texto-2">
                        <p>En nuestra página, nos preocupamos por tu bienestar físico y queremos asegurarnos de que recibas el cuidado adecuado para tu diabetes
                            y colostomía. Nuestro equipo de enfermería especializado está aquí para brindarte servicios de calidad y apoyarte en tu camino hacia una vida saludable y activa.</p>
                        <div class="enlace">
                            <a href="/enfermeros.php">Apoyo Enfermeros</a>
                        </div>
                    </div>
                    <div class="contenedor-imagen-borde">
                        <img src="/build/img/hunters-race-MYbhN8KaaEc-unsplash-fotor-2023062422815.webp" alt="imagen enfermeros">
                    </div>
                </div>
            </div>
        </div>

        <div id="tab8" class="tabcontent3">
            <h3>Contenido de la Pestaña 2</h3>
            <p>Este es el contenido de la pestaña 2.</p>
        </div>

        <div id="Tab9" class="tabcontent3">
            <h3>Contenido de la Pestaña 3</h3>
            <p>Este es el contenido de la pestaña 3.</p>
        </div>
    </div>
    <div class="espacio"></div>
</div>
</div>
<div class="contenedor">
    <div class="espacio"></div>
    <div class="investigaciones borde-superior-negro-delgado">
        <div class="contenedor-texto">
            <h2>Nuestras investigaciones</h2>
            <div class="mt-spacing">
                <p>Las investigaciones en el cuidado de la diabetes y la colostomía buscan mejorar la calidad de vida y
                    encontrar soluciones innovadoras para quienes viven con estas condiciones.</p>
                <div class="mt-spacing">
                    <a href="#">Aprende sobre nuestras investigaciones</a>
                </div>
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
    </div>
</div>
<div class="espacio"></div>
<?php incluirTemplate("footer") ?>
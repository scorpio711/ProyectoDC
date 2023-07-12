<?php 
//insertar la conexion
$db = conectarDB();

//consultar
$query = "SELECT * FROM investigaciones LIMIT ${limite}";

//Obtener los resultados
$resultado = mysqli_query($db, $query);


?>


<!-- Investigaciones -->
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Nuestras Investigaciones
            </h2>

            <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Nuestras investigaciones se centran
                en avanzar en la comprensión de la diabetes y la colostomía, así como en mejorar los tratamientos y la
                calidad de vida de las personas afectadas. A través de rigurosos estudios científicos, buscamos
                descubrir nuevos enfoques médicos, terapéuticos y tecnológicos para el manejo de estas condiciones. </p>
        </div>
        <!-- text - end -->

        <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
            <?php while($investigacion = mysqli_fetch_assoc($resultado)): ?>
            <!-- article - start -->
            <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                    <img src="/imagenes/<?php echo $investigacion["imagen"]?>"
                        loading="lazy" alt="Photo by Minh Pham"
                        class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                </a>

                <div class="flex flex-1 flex-col p-4 sm:p-6">
                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                        <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600"><?php echo $investigacion["titulo"]?></a>
                    </h2>

                    <p class="mb-8 text-gray-500"><?php echo $investigacion["resumen"]?></p>

                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1611898872015-0571a9e38375?auto=format&q=75&fit=crop&w=64"
                                    loading="lazy" alt="Photo by Brock Wegner"
                                    class="h-full w-full object-cover object-center" />
                            </div>

                            <div>
                                <span class="block text-indigo-500"><?php echo $investigacion["autor"]?></span>
                                <span class="block text-sm text-gray-400"><?php echo $fechaFormateada = date("d/m/Y", strtotime($investigacion["fecha_publicacion"]));?></span>
                            </div>
                        </div>

                        <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                    </div>
                </div>
            </div>
            <!-- article - end -->
            <?php endwhile ?>
        </div>
    </div>
</div>

<?php
//cerrar la conexion


?>
<?php
require "includes/funciones.php";
incluirTemplate("header");
?>
<div class="container mx-auto p-4 md:py-8">
    <!--parte rincipal -->
    <section class="flex flex-col items-center">
        <div class="flex max-w-xl flex-col items-center pt-8 pb-0 text-center sm:pb-16 lg:pt-32 lg:pb-32">
            <p class="mb-4 font-semibold text-indigo-500 md:mb-6 md:text-lg xl:text-xl">Estamos orgullosos de presentarte</p>

            <h1 class="text-black-800 mb-8 text-4xl font-bold sm:text-5xl md:mb-12 md:text-6xl">Una Plataforma para la Diabetes y la Colostomía</h1>

            <p class="mb-8 leading-relaxed text-gray-500 md:mb-12 xl:text-lg">"Uniendo fuerzas para vivir con pasión y superar los desafíos juntos"</p>

            <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">
                <a href="#" class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">Comienza ahora</a>

                <a href="#" class="inline-block rounded-lg border bg-white px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:text-base">Aprende</a>
            </div>
        </div>
    </section>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <!-- sobre nosotros -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
            <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
                <div>
                    <div class="h-64 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-auto">
                        <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600&h=750" loading="lazy" alt="Photo by Martin Sanchez" class="h-full w-full object-cover object-center" />
                    </div>
                </div>

                <div class="md:pt-8">
                    <p class="text-center font-bold text-indigo-500 md:text-left">¿Quienes somos nosotros?</p>

                    <h1 class="mb-4 text-center text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6 md:text-left">Cuidando Juntos la Diabetes y la Colostomía</h1>

                    <p class="mb-6 text-gray-500 sm:text-lg md:mb-8">
                        Nuestra misión es proporcionar apoyo integral y empoderamiento a las personas con diabetes y colostomía, brindándoles información, recursos y una comunidad solidaria. Nos esforzamos por mejorar la calidad de vida de nuestros usuarios al fomentar la educación, el auto-cuidado y la conexión entre pares.<br /><br />
                        Buscamos romper barreras, eliminar el estigma y promover la inclusión, permitiendo que cada individuo viva una vida plena y saludable, sin importar los desafíos que enfrenten. <a href="#" class="text-indigo-500 underline transition duration-100 hover:text-indigo-600 active:text-indigo-700">Mas sobre nosotros</a>
                    </p>

                    <h2 class="mb-2 text-center text-xl font-semibold text-gray-800 sm:text-2xl md:mb-4 md:text-left">Sobre Nosotros</h2>

                    <p class="mb-6 text-gray-500 sm:text-lg md:mb-8">En el Equipo de Apoyo D-Care, estamos comprometidos en brindar un apoyo incondicional a las personas que viven con diabetes y colostomía. Somos un grupo de profesionales altamente capacitados y apasionados, dedicados a ofrecer un espacio seguro y comprensivo para aquellos que enfrentan estos desafíos diarios.</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

    <!-- Nuestros servicios -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Nuestros Servicios</h2>

                <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Nuestros servicios abarcan asesoramiento legal, apoyo psicológico y atención médica especializada, proporcionando un enfoque integral para aquellos que viven con diabetes y colostomía.</p>
            </div>
            <!-- text - end -->

            <div class="grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-3">
                <!-- product - start -->
                <div>
                    <a href="#" class="group relative mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3">
                        <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?auto=format&q=75&fit=crop&crop=top&w=600&h=700" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex items-start justify-between gap-2 px-2">
                        <div class="flex flex-col">
                            <h2 class="mb-2 text-lg font-semibold text-gray-800">
                                <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">Ayuda Juridica</a>
                            </h2>

                            <p class="mb-8 text-gray-500">Brindamos asesoramiento legal especializado, guiando a las personas con diabetes y colostomía en la protección de sus derechos, beneficios y recursos legales para asegurar su bienestar y calidad de vida.</p>
                        </div>
                    </div>
                </div>
                <!-- product - end -->


                <!-- product - start -->
                <div>
                    <a href="#" class="group relative mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3">
                        <img src="https://images.unsplash.com/photo-1548286978-f218023f8d18?auto=format&q=75&fit=crop&crop=top&w=600&h=700" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex items-start justify-between gap-2 px-2">
                        <div class="flex flex-col">
                            <h2 class="mb-2 text-lg font-semibold text-gray-800">
                                <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">Apoyo Psicológico</a>
                            </h2>

                            <p class="mb-8 text-gray-500">Nuestro equipo de psicólogos capacitados ofrece un espacio seguro y confidencial para el apoyo emocional, ayudando a las personas con diabetes y colostomía a enfrentar los desafíos psicológicos, manejar el estrés y fortalecer su resiliencia.</p>
                        </div>
                    </div>
                </div>
                <!-- product - end -->

                <!-- product - start -->
                <div>
                    <a href="#" class="group relative mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3">
                        <img src="https://images.unsplash.com/photo-1566207274740-0f8cf6b7d5a5?auto=format&q=75&fit=crop&crop=top&w=600&h=700" loading="lazy" alt="Photo by Vladimir Fedotov" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex items-start justify-between gap-2 px-2">
                        <div class="flex flex-col">
                            <h2 class="mb-2 text-lg font-semibold text-gray-800">
                                <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">Atención Médica</a>
                            </h2>

                            <p class="mb-8 text-gray-500">Proporcionamos atención médica personalizada y especializada, trabajando en colaboración con médicos expertos en diabetes y colostomía para ofrecer un enfoque integral en el cuidado de la salud física, el manejo de la enfermedad y la promoción del bienestar general.</p>
                        </div>
                    </div>
                </div>
                <!-- product - end -->
            </div>
        </div>
    </div>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

    <!-- Investigaciones -->
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Nuestras Investigaciones</h2>

                <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Nuestras investigaciones se centran en avanzar en la comprensión de la diabetes y la colostomía, así como en mejorar los tratamientos y la calidad de vida de las personas afectadas. A través de rigurosos estudios científicos, buscamos descubrir nuevos enfoques médicos, terapéuticos y tecnológicos para el manejo de estas condiciones. </p>
            </div>
            <!-- text - end -->

            <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">New trends in Tech</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1611898872015-0571a9e38375?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Brock Wegner" class="h-full w-full object-cover object-center" />
                                </div>

                                <div>
                                    <span class="block text-indigo-500">Mike Lane</span>
                                    <span class="block text-sm text-gray-400">July 19, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->

                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">Working with legacy stacks</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1586116104126-7b8e839d5b8c?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by peter bucks" class="h-full w-full object-cover object-center" />
                                </div>

                                <div>
                                    <span class="block text-indigo-500">Jane Jackobs</span>
                                    <span class="block text-sm text-gray-400">April 07, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->

                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">10 best smartphones for devs</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1592660503155-7599a37f06a6?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Jassir Jonis" class="h-full w-full object-cover object-center" />
                                </div>

                                <div>
                                    <span class="block text-indigo-500">Tylor Grey</span>
                                    <span class="block text-sm text-gray-400">March 15, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->

                <!-- article - start -->
                <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">8 High performance Notebooks</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Aiony Haust" class="h-full w-full object-cover object-center" />
                                </div>

                                <div>
                                    <span class="block text-indigo-500">Ann Park</span>
                                    <span class="block text-sm text-gray-400">January 27, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->
            </div>
        </div>
    </div>
</div>

<?php incluirTemplate("footer") ?>
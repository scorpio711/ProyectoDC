<?php
require "includes/app.php";
$inicio = true;
incluirTemplate("header");
?>
<main class="contenedor">
    <div class="mt-12">
        <?php
        $limite = 20;
        include 'includes/templates/investigaciones.php'
            ?>
    </div>
</main>
<?php incluirTemplate("footer") ?>
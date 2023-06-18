<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CareFullnes</title>
  <script src="build/js/bundle.min.js"></script>
  <link rel="stylesheet" href="build/css/app.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <div id="mi-div">
    <header id="header" class="header">
      <div class="contenedor contenido-header">
        <div class="barra">
          <div class="contenedor-logotipo">
            <a class="queFastidio" href="/">
              <img id="logotipo" src="/build/img/bxs-cat.svg" class="imagen-logotipo" alt="imagen-logotipo"></img>
              <img id="logotipo-scrolled" src="/build/img/bxs-cat.svg" class="imagen-logotipo hidden" alt="imagen-logotipo"></img>
            </a>
          </div>
          <nav class="navegacion">
            <div class="dropdown">
              <a href="/atencion.php">Atencion <i class="fas fa-chevron-down"></i></a>
              <div class="dropdown-content">
                <a href="/enfermeros.php">Enfermeros</a>
                <a href="/psicologico.php">Psicologico</a>
                <a href="/juridico.php">Juridica</a>
              </div>
            </div>
            <a href="contactanos.php">Contactanos</a>
            <a href="nosotros.php">Nosotros</a>
            <div class="dropdown">
              <button class="boton">Ingresar <i class="fas fa-chevron-down"></i></button>
              <div class="dropdown-content">
                <a href="/registrarse.php">Registrarse</a>
                <a href="/login.php">Login</a>
              </div>
            </div>
            <a href="donaciones.php">Donaciones</a>
          </nav>
          <button id="openMenuButton" class="boton">Abrir menú</button>
          <div id="overlayMenu">
            <div id="contenedorMenu">
              <div class="subContenedorMenu">
                <div class="contenedorBotonMenu">
                  <a href="/">
                    <img src="/build/img/bxs-cat 1-blanco.svg" alt="iconoBlanco" class="logotipo-principal">
                  </a>

                  <button id="closeMenuButton" class="boton primerElemento">Cerrar</button>
                </div>
                <div class="contenedor-navegaciones">
                  <button onclick="window.location.href = 'atencion.php'" class="boton-menu">Atencion<span class="material-icons">call_made</span></button>
                  <button onclick="window.location.href = '/contactanos.php'" class="boton-menu">Contactanos<span class="material-icons">call_made</span></button>
                  <button onclick="window.location.href = '/nosotros.php'" class="boton-menu">Nosotros<span class="material-icons">call_made</span></button>
                  <button onclick="window.location.href = '/registrarse.php'" class="boton-menu">Registrarse<span class="material-icons">call_made</span></button>
                  <button onclick="window.location.href = '/login.php'" class="boton-menu">Login<span class="material-icons">call_made</span></button>
                  <button onclick="window.location.href = '/donaciones.php'" class="boton-menu">Donaciones<span class="material-icons">call_made</span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Cierre de la barra -->
    </header>
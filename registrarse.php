<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="build/css/app.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <div class="contenedor-universal">
    <div class="primer-contenido">
      <div>
        <a class="logotipo-principal" href="/">
          <img src="build/img/bxs-cat.svg" alt="logotipo-CareFullnes" />
        </a>
      </div>
    </div>
    <main>
      <section class="seccion-formulario">
        <div class="contenedor-formulario">
          <div>
            <h1>Registrate</h1>
            <p>Por favor estar pendiente de la direccion de correo electronco. Esta sera usada para
              la identificacion de la identidad y propositos de seguridad</p>
          </div>
          <div class="signupFrm">
            <form action="" class="form">

              <div class="inputContainer">
                <input type="email" class="input" placeholder="a">
                <label for="email" class="label">Email</label>
              </div>

              <div class="inputContainer">
                <input type="text" class="input" placeholder="a">
                <label for="nombre" class="label">Nombre Completo</label>
              </div>

              <div class="inputContainer">
                <input type="password" class="input" placeholder="a">
                <label for="password" class="label">Password</label>
              </div>

              <div class="inputContainer">
                <input type="password" class="input" placeholder="a">
                <label for="password" class="label">Confirm Password</label>
              </div>

              <input type="submit" class="submitBtn" value="Sign up">
            </form>
          </div>
          <p>¿Ya tienes una cuenta? <a href="/login.php">Inicia sesion</a></p>
      </section>
    </main>
    <footer>
      <a href="#">Terminos y condiciones</a>
      |
      <a href="#">Politicas de privacidad</a>
    </footer>
  </div>
</body>

</html>
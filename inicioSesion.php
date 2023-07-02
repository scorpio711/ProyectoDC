<?php
require "includes/funciones.php";
require "includes/config/database.php";
$db = conectarDB();

$errores = [];

//Autenticar el usuario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    //errores
    if (!$email) {
        $errores[] = "El email es obligatorio o no es valido";
    }
    if (!$password) {
        $errores[] = "El password es obligatorio o no es valido";
    }

    if (empty($errores)) {
        //revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {
            //Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            //verificar si el password es correcto
            $auth = password_verify($password, $usuario["password"]);
            if ($auth) {
                //el usuario esta autenticado
                session_start();

                //llenar al arreglo de la sesion
                // $_SESSION['rol'] = 1;
                session_start();
                $_SESSION['login'] = true;

                header("location:/admin/index.php");
            } else {
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}

//incluye el header
incluirTemplate("header");
?>

<main class="contenedor">
    <div class="flex min-h-full flex-col items-center my-20 justify-center px-6 pb-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>
        <?php foreach ($errores as $error) : ?>
            <div class="p-4 text-sm mt-4 text-red-800 w-96 text-center rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">¡Cuidado!</span>
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form method="POST" class="space-y-6" action="#" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                ¿No estas registrado?
                <a href="/registroUsuario.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Registrate Gratis</a>
            </p>
        </div>
    </div>
</main>
<?php incluirTemplate("footer") ?>
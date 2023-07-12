<?php
require "includes/app.php";
$inicio = true;

$db = conectarDB();

//Crear el email y el password
$email = "correo@gmail.com";
$password = "123456";

//hashear password

$passwordHash= password_hash($password, PASSWORD_DEFAULT);


//Query para crear el usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}','${passwordHash}');";

echo $query;

//Insertar en la base de datos
mysqli_query( $db, $query);

?>
<?php
$nombre_form = $_POST ['nombre'];
$apellido_form = $_POST ['apellido'];
$teléfono_form = $_POST ['teléfono'];
$correo_electrónico_form = $_POST ['correo_electrónico'];
$mensaje_form = $_POST ['mensaje'];

//Base de datos

$conexion = mysqli_connect("localhost", "id20910223_vintage_clothes", "V1NTAG3_c1oth3s", "id20910223_donacion") or exit ("No se pudo conectar a la base de datos");
mysqli_query($conexion, "INSERT INTO contacto VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$teléfono_form','$correo_electrónico_form', '$mensaje_form')");
mysqli_close($conexion);
header('Location: donar.php?enviado=ok');
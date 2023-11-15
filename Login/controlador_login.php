<?php
include('conexion_bd.php');

$usuario = $_POST['usuario'];
$password = $_POST['password'];

session_start();
$_SESSION['usuarios'] = $usuario;

$consulta = "SELECT * FROM usuarios where usuario='$usuario' and password='$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("Location: home.php");
    exit();
} else {
    echo '<h1 class="bad">ERROR DE INICIO</h1>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>

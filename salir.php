<?php
require_once('conexion.php');
session_start();
$user=utf8_encode($_SESSION["usuarioactual"]);
$ensesion="UPDATE usuarios SET login=0 WHERE idusuario='$user'";
$result = mysqli_query($conecta,$ensesion);
session_destroy();
echo "<script> window.location.href = 'index.php'</script>";
?>

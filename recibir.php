<?php

include("conec_db.php");

date_default_timezone_set('UTC');
date_default_timezone_set("America/Buenos_Aires");

$estado = $_REQUEST['estado'];
$tiempo = $_REQUEST['tiempo'];
$respuestaCorrecta = $_REQUEST['respuestaCorrecta'];
$respuestaIncorrecta = $_REQUEST['respuestaIncorrecta'];

$consulta = "UPDATE users SET estado = '$estado', tiempo = '$tiempo', respuesta_incorrecta = '$respuestaIncorrecta', respuesta_correcta = '$respuestaCorrecta' WHERE respuesta_correcta = 'ok'";
$resultado = mysqli_query($connexion, $consulta);
  header("Location: html/index.html");
?>
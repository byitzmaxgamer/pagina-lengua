<?php
date_default_timezone_set('UTC');
date_default_timezone_set("America/Buenos_Aires");

include("conec_db.php");

if (isset($_POST['enviar'])){
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['curso']) >= 1 && strlen($_POST['division']) >= 1 && strlen($_POST['escuela']) >= 1){
        $nombre = $_POST['nombre'];
        $curso = $_POST['curso'];
        $division = $_POST['division'];
        $escuela = $_POST['escuela'];
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");

        $consulta = "INSERT INTO users(nombre, curso, division, escuela, fecha, hora, respuesta_correcta) VALUES ('$nombre','$curso','$division','$escuela','$fecha','$hora','ok')";
        $resultado = mysqli_query($connexion, $consulta);
        
    }
    header("Location: html/index.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>Formulario</h1>
        <input type="text" name="nombre" placeholder="Nombre Completo">
        <input type="text" name="curso" placeholder="Curso">
        <input type="text" name="division" placeholder="División">
        <input type="text" name="escuela" placeholder="Escuela">
        <input type="submit" name="enviar">
        
    </form>
    <?php
        include("registro.php");
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/formulario.css">
    <title>Formulario</title>
</head>

<body>
    <div class="form">

        <form action="./respuesta.php" method="POST">

            <label>Nombres:</label>
            <br>
            <input type="text" name="Nombres" placeholder="nombres" required>
            <br><br>
            <label>Apellidos:</label>
            <br>
            <input type="text" name="Apellidos" placeholder="Apellidos" required>
            <br><br>

            <label>Numero de Identificacion:</label>
            <br>
            <input type="text" name="Cedula" placeholder="Numero de Identificacion" required>
            <br<br><br><br>

                <label>Correo:</label>
                <br>
                <input type="email" name="Correo" placeholder="Correo" required>
                <br><br>
                <label>Edad:</label>
                <br>
                <input type="text" name="Edad" placeholder="Edad" required>
                <br><br>
                <label>Descripcion de servicio solicitado:</label><br>
                <textarea type="text" name="Detalle" rows="4" cols="50">
                </textarea><br><br>

                <form action="">
                    <label>Archivos adjuntos:</label><br>
                    <input type="file" name="myfile">
                </form><br><br>

                
                <input type="submit" value="enviar">
                <input type="reset" value="Borrar">


        </form><br><br>

    </div>

</body>

</html>
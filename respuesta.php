<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/respuesta.css">
    <title>Respuestas del formulario</title>
</head>
<body>
    
<?php
            if($_POST["Edad"]>60){
                echo "Usted es un adulto mayor <hr>";
                echo "Usted es mayor de edad y estos son los detalles de su formulario <hr>";
                $nombres = $_POST["Nombres"];
                    echo "Tu nombre es $nombres<hr>";

                $apellidos = $_POST["Apellidos"];
                    echo "Tu apellido es $apellidos <hr>";

                $identificacion = $_POST["Cedula"];
                    echo "Tu numero de identificacion es $identificacion <hr>";

                $correo = $_POST["Correo"];
                    echo "Tu correo es $correo <hr>";

                $edad = $_POST["Edad"];
                    echo "Tu edad es $edad <hr>";
                    echo "Tu comentario se registro correctamente";
            }
            elseif($_POST["Edad"]>=18){

                    echo "Usted es mayor de edad y estos son los detalles de su formulario <hr>";
                $nombres = $_POST["Nombres"];
                    echo "Tu nombre es $nombres<hr>";

                $apellidos = $_POST["Apellidos"];
                    echo "Tu apellido es $apellidos <hr>";

                $identificacion = $_POST["Cedula"];
                    echo "Tu numero de identificacion es $identificacion <hr>";

                $correo = $_POST["Correo"];
                    echo "Tu correo es $correo <hr>";

                $edad = $_POST["Edad"];
                    echo "Tu edad es $edad <hr>";
                    echo "Tu comentario se registro correctamente"; 
        
            }
            else{
                echo "Usted es menor de Edad, por lo cual no tiene permitido diligenciar este
                formulario";
            }
        
        ?><br><br><br>
         <button>
             <a class="principal" href="./index.html">Regresar a inicio</a>
        </button>
</body>
</html>
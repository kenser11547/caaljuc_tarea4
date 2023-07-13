<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAREA NUMERO 4 "FORMULARIO DINAMICO</title>
        <!-- Agregar los estilos de Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <style>
          body {
            background-image: url(../5.jpg);
            background-size:cover;
            background-attachment: fixed;
        }
        .contenedor {
            max-width: 500px;
            margin: 0 auto;
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        #input {
            margin-bottom: 20px;
        }
        #enviar {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>FORMULARIO DINAMICO</h1>
        <form id="formul" action="#" method="POST">
            <div id="input"></div>
            <button id="agregar" class="btn btn-primary" type="button">AGREGAR</button>
            <button id="eliminar" class="btn btn-secondary" type="button">ELIMINAR</button>
            <br><br>
            <button id="enviar" class="btn btn-success" type="submit">ENVIAR</button>
        </form>
    </div>
    <script src="java.js"></script>
</body>
</html>
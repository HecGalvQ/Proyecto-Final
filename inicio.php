<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="styleinic.css">
</head>
<body>
<form action="respuesta.php" method="post">
            <div class=ventana>
                <br>
                <label for="">Nombre Usuario</label>
                <br><br>
                <input name="usuario" type="text" placeholder="Ingresa Usuario" required class="tamaño">
                <br><br>
                <label for="">Contraseña</label>
                <br><br>
                <input name="password" type="password" required  placeholder="Ingresa contrasenia" class="tamaño">
                <br><br>
                <button class="Button-St">Log in</button> <br> <br>
                <br>

            </div>
</form>
<br><br>
<a href="index.php"><button class="back-button">Volver a Inicio</button></a>
</body>
</html>
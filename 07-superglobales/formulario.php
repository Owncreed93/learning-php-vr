<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>
<body>

    <h1>Formulario en PHP</h1>
    <form action="recibir.php" method="post">

        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos">
        </p>
        

        <input type="submit" value="Enviar datos">
    </form>

</body>
</html>

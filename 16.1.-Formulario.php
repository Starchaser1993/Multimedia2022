<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--en vez de get se puede usar post para que un tercero no pueda interferir-->
<form action="16.2.-procesar formulario.php" method="GET"> 
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <label for="Apellido">Apellido:</label>
    <input type="text" name="apellido" id="Apellido">
    <input type="submit" value="Enviar formulario">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--obtener los datos de la base de datos y mostrarlos en Html en una tabla-->
    <?php$host = "localhost";
$user = "root";
$pass = "";
$db = "Multimedia2022";
$conexion = mysqli_connect($host, $user, $pass, $db);
print_r ($conexion);

$consulta = "SELECT * FROM usuarios";

$resultado = mysqli_query($conexion, $consulta);
?>
</body>
</html>


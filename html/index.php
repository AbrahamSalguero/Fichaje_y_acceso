<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <section>
        <form action="index.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="name" placeholder="Nombre">

            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido" id="apel" placeholder="Apellido">

            <label for="dia">Día de Trabajo</label>
            <input type="date" name="dia">

            <label for="hora_entrada">Hora de entrada</label>
            <input type="time" name="hora_entrada">

            <label for="hora_salida">Hora de Salida</label>
            <input type="time" name="hora_salida">
            
            <input type="submit" value="Fichar" id="boton_aceptar">
        </form>
    </section>


    <?php
if ($_POST) {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellido"];
    $diaTrabajo = $_POST["dia"];
    $Hentrada = $_POST["hora_entrada"];
    $hsalida = $_POST["hora_salida"];

    $host = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bbdd = "horario";

    $conexion = mysqli_connect($host, $usuario, $contraseña, $bbdd);

    // INSERT PARA INGRESAR LOS DATOS
    $consulta = "INSERT INTO datos (nombre, Apellidos, DiaTrabajo, Hentrada, Hsalida) VALUES('$nombre', '$apellidos','$diaTrabajo','$Hentrada', '$hsalida')";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "<script>alert('Bienvenido al trabajo!');</script>";
    } else {
        echo "<script>alert('Ups! algo ha salido mal, vuelve a intentarlo. " . mysqli_error($conexion) . "');</script>";
    }
    

    mysqli_close($conexion);
}

?>
</body>
</html>
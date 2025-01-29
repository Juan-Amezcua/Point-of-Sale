<?php 
    include("../connection.php");
    $con=connection();

    $id_servicio=$_GET['id_servicio'];

    $sql="SELECT * FROM servicios WHERE id_servicio='$id_servicio'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style.css" rel="stylesheet">
        <title>Editar servicios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_servicio.php" method="POST">
                <input type="hidden" name="id_servicio" value="<?= $row['id_servicio']?>">
                <input type="text" name="nombre_servicio" placeholder="Nombre" value="<?= $row['nombre_servicio']?>">
                <input type="text" name="tipo_tarifa" placeholder="Tarifa" value="<?= $row['tipo_tarifa']?>">
                <input type="text" name="monto_tarifa" placeholder="Monto" value="<?= $row['monto_tarifa']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
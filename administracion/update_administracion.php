<?php 
    include("../connection.php");
    $con=connection();

    $nombre_administracion=$_GET['nombre_administracion'];

    $sql="SELECT * FROM administracion WHERE nombre_administracion='$nombre_administracion'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style.css" rel="stylesheet">
        <title>Editar administracion</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_administracion.php" method="POST">
                <input type="text" name="nombre_administracion" placeholder="Nombre" value="<?= $row['nombre_administracion']?>">
                <input type="text" name="domicilio_administracion" placeholder="Domicilio" value="<?= $row['domicilio_administracion']?>">
                <input type="text" name="telefono_administracion" placeholder="Telefono" value="<?= $row['telefono_administracion']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
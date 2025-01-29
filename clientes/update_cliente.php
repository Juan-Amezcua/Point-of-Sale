<?php 
    include("../connection.php");
    $con=connection();

    $id_cliente=$_GET['id_cliente'];

    $sql="SELECT * FROM clientes WHERE id_cliente='$id_cliente'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style.css" rel="stylesheet">
        <title>Editar clientes</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_cliente.php" method="POST">
                <input type="hidden" name="id_cliente" value="<?= $row['id_cliente']?>">
                <input type="text" name="nombre_cliente" placeholder="Nombre" value="<?= $row['nombre_cliente']?>">
                <input type="text" name="telefono_cliente" placeholder="Domicilio" value="<?= $row['telefono_cliente']?>">
                <input type="text" name="correo_cliente" placeholder="Telefono" value="<?= $row['correo_cliente']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
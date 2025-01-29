<?php 
    include("../connection.php");
    $con=connection();

    $id_venta_detalle=$_GET['id_venta_detalle'];

    $sql="SELECT * FROM venta_detalle WHERE id_venta_detalle='$id_venta_detalle'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style.css" rel="stylesheet">
        <title>Editar venta detalle</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_venta_detalle.php" method="POST">
                <input type="hidden" name="id_venta_detalle" value="<?= $row['id_venta_detalle']?>">
                <input type="text" name="cantidad_producto" placeholder="Cantidad producto" value="<?= $row['cantidad_producto']?>">
                <input type="text" name="precio_unidad" placeholder="Precio unidad" value="<?= $row['precio_unidad']?>">
                <input type="text" name="precio_conjunto" placeholder="Precio conjunto" value="<?= $row['precio_conjunto']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
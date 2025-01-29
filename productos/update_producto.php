<?php 
    include("../connection.php");
    $con=connection();

    $id_producto=$_GET['id_producto'];

    $sql="SELECT * FROM productos WHERE id_producto='$id_producto'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style.css" rel="stylesheet">
        <title>Editar productos</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_producto.php" method="POST">
                <input type="hidden" name="id_producto" value="<?= $row['id_producto']?>">
                <input type="text" name="nombre_producto" placeholder="Nombre" value="<?= $row['nombre_producto']?>">
                <input type="text" name="categoria_producto" placeholder="Categoria" value="<?= $row['categoria_producto']?>">
                <input type="text" name="marca_producto" placeholder="Marca" value="<?= $row['marca_producto']?>">
                <input type="text" name="modelo_producto" placeholder="Modelo" value="<?= $row['modelo_producto']?>">
                <input type="text" name="precio_producto" placeholder="Precio" value="<?= $row['precio_producto']?>">
                <input type="text" name="stock_producto" placeholder="Stock" value="<?= $row['stock_producto']?>">
                <input type="text" name="porcentaje_falla" placeholder="% Falla" value="<?= $row['porcentaje_falla']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
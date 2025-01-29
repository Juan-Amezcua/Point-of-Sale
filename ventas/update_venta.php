<?php 
    include("../connection.php");
    $con=connection();

    $id_venta=$_GET['id_venta'];

    $sql="SELECT * FROM ventas WHERE id_venta='$id_venta'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style.css" rel="stylesheet">
        <title>Editar ventas</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_venta.php" method="POST">
                <input type="hidden" name="id_venta" value="<?= $row['id_venta']?>">
                <input type="text" name="fecha_hora" placeholder="Fecha-Hora" value="<?= $row['fecha_hora']?>">
                <input type="text" name="lugar_venta" placeholder="Luegar venta" value="<?= $row['lugar_venta']?>">
                <input type="text" name="gran_total_ventas" placeholder="Total venta" value="<?= $row['gran_total_ventas']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
<?php 
    include("../connection.php");
    $con=connection();

    $id_colaborador=$_GET['id_colaborador'];

    $sql="SELECT * FROM colaboradores WHERE id_colaborador='$id_colaborador'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../style.css" rel="stylesheet">
        <title>Editar colaboradores</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_colaborador.php" method="POST">
                <input type="hidden" name="id_colaborador" value="<?= $row['id_colaborador']?>">
                <input type="text" name="nombre_colaborador" placeholder="Nombre" value="<?= $row['nombre_colaborador']?>">
                <input type="text" name="domicilio_colaborador" placeholder="Domicilio" value="<?= $row['domicilio_colaborador']?>">
                <input type="text" name="telefono_colaborador" placeholder="Telefono" value="<?= $row['telefono_colaborador']?>">
                <input type="text" name="horario_colaborador" placeholder="Horario" value="<?= $row['horario_colaborador']?>">
                <input type="text" name="sueldo_colaborador" placeholder="Sueldo" value="<?= $row['sueldo_colaborador']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
<?php
include("connection.php");
$con = connection();

$id_ventas_fk=$_GET["id_venta"];

$sql = "SELECT * FROM venta_detalle WHERE id_ventas_fk='$id_ventas_fk'";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="HomeStyle.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="http://kit.fontawesome.com/0717354049.js" crossorigin="anonymous"></script>
    <title>Venta detalle</title>

    <style>
        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: #008CBA;
        }
    </style>
</head>

<body>

    <input type="checkbox" id="check" />
    <label for="check">
        <i class="fa-solid fa-bars-staggered" id="btn"></i>
        <i class="fa-solid fa-xmark" id="cancel"></i>
    </label>
    <!--Barra de menu-->
    <div class="sidebar">
        <header>Menu</header>
        <ul>
            <li>
                <a href="administracion.php">
                    <i class="fa-solid fa-user"></i>Administracion
                </a>
            </li>
            <li>
                <a href="colaboradores.php">
                    <i class="fa-solid fa-person"></i>Colaboradores
                </a>
            </li>
            <li>
                <a href="productos.php">
                    <i class="fa-solid fa-boxes-stacked"></i>Productos
                </a>
            </li>
            <li>
                <a href="clientes.php">
                    <i class="fa-solid fa-user"></i>Clientes
                </a>
            </li>
            <li>
                <a href="servicios.php">
                    <i class="fas fa-link"></i>Servicios
                </a>
            </li>
            <li>
                <a href="ventas.php">
                    <i class="fa-solid fa-cash-register"></i>Ventas
                </a>
            </li>
        </ul>
    </div>

    <div class="users-table">
        <br><h1>Venta detalle</h1><br><br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cantidad producto</th>
                    <th>Precio unidad</th>
                    <th>Precio conjunto</th>
                    <th>ID Producto</th>
                    <th>ID Ventas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_venta_detalle'] ?></th>
                        <th><?= $row['cantidad_producto'] ?></th>
                        <th><?= $row['precio_unidad'] ?></th>
                        <th><?= $row['precio_conjunto'] ?></th>
                        <th><?= $row['id_producto_fk'] ?></th>
                        <th><?= $row['id_ventas_fk'] ?></th>
                        <th><a href="venta_detalle/update_venta_detalle.php?id_venta_detalle=<?= $row['id_venta_detalle'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="venta_detalle/delete_venta_detalle.php?id_venta_detalle=<?= $row['id_venta_detalle'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div><br>

    <button class="button" style="background-color:pink";>
        <a href="venta_detalle/form_venta_detalle.php">
            Insertar venta detalle
        </a>
    </button>

</body>

</html>
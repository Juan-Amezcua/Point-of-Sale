<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM ventas";
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
    <title>Ventas</title>

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
        <br><h1>Ventas registradas</h1><br><br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha-Hora</th>
                    <th>Lugar de venta</th>
                    <th>Total</th>
                    <th>ID Cliente</th>
                    <th>ID Colaborador que registra</th>
                    <th>Detalles</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_venta'] ?></th>
                        <th><?= $row['fecha_hora'] ?></th>
                        <th><?= $row['lugar_venta'] ?></th>
                        <th><?= $row['gran_total_ventas'] ?></th>
                        <th><?= $row['id_cliente_fk'] ?></th>
                        <th><?= $row['id_colaborador_fk'] ?></th>
                        <th><a href="venta_detalle.php?id_venta=<?= $row['id_venta'] ?>" class="users-table--edit" style="background-color:black">Detalles</a></th>
                        <th><a href="ventas/update_venta.php?id_venta=<?= $row['id_venta'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="ventas/delete_venta.php?id_venta=<?= $row['id_venta'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div><br>

    <button class="button" style="background-color:pink";>
        <a href="ventas/form_venta.php">
            Insertar venta
        </a>
    </button>

</body>

</html>
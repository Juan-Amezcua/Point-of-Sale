<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM productos";
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
    <title>Productos</title>

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
        <br><h1>Productos registrados</h1><br><br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>% Falla</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_producto'] ?></th>
                        <th><?= $row['nombre_producto'] ?></th>
                        <th><?= $row['categoria_producto'] ?></th>
                        <th><?= $row['marca_producto'] ?></th>
                        <th><?= $row['modelo_producto'] ?></th>
                        <th><?= $row['precio_producto'] ?></th>
                        <th><?= $row['stock_producto'] ?></th>
                        <th><?= $row['porcentaje_falla'] ?></th>
                        <th><a href="productos/update_producto.php?id_producto=<?= $row['id_producto'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="productos/delete_producto.php?id_producto=<?= $row['id_producto'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div><br>

    <button class="button" style="background-color:pink";>
        <a href="productos/form_producto.php">
            Insertar producto
        </a>
    </button>

</body>

</html>
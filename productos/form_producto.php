<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../HomeStyle.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <script src="http://kit.fontawesome.com/0717354049.js" crossorigin="anonymous"></script>
    <title>Productos</title>
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
                <a href="../administracion.php">
                    <i class="fa-solid fa-user"></i>Administracion
                </a>
            </li>
            <li>
                <a href="../colaboradores.php">
                    <i class="fa-solid fa-person"></i>Colaboradores
                </a>
            </li>
            <li>
                <a href="../productos.php">
                    <i class="fa-solid fa-boxes-stacked"></i>Productos
                </a>
            </li>
            <li>
                <a href="../clientes.php">
                    <i class="fa-solid fa-user"></i>Clientes
                </a>
            </li>
            <li>
                <a href="../servicios.php">
                    <i class="fas fa-link"></i>Servicios
                </a>
            </li>
            <li>
                <a href="../ventas.php">
                    <i class="fa-solid fa-cash-register"></i>Ventas
                </a>
            </li>
        </ul>
    </div>

    <div class="users-form">
        <br><h2>Ingresar producto</h2>
        <form action="insert_producto.php" method="POST">
            <input type="text" name="nombre_producto" placeholder="Nombre">
            <input type="text" name="categoria_producto" placeholder="Categoria">
            <input type="text" name="marca_producto" placeholder="Marca">
            <input type="text" name="modelo_producto" placeholder="Modelo">
            <input type="text" name="precio_producto" placeholder="Precio">
            <input type="text" name="stock_producto" placeholder="Stock">
            <input type="text" name="porcentaje_falla" placeholder="% Falla">

            <input type="submit" value="Agregar">
        </form>
    </div>

</body>

</html>
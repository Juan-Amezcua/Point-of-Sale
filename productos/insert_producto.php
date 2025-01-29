<?php

include("../connection.php");
$con = connection();

$id_producto = null;
$nombre_producto = $_POST['nombre_producto'];
$categoria_producto = $_POST['categoria_producto'];
$marca_producto = $_POST['marca_producto'];
$modelo_producto = $_POST['modelo_producto'];
$precio_producto = $_POST['precio_producto'];
$stock_producto = $_POST['stock_producto'];
$porcentaje_falla = $_POST['porcentaje_falla'];

$sql = "INSERT INTO productos VALUES('$id_producto','$nombre_producto','$categoria_producto','$marca_producto','$modelo_producto','$precio_producto','$stock_producto','$porcentaje_falla')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
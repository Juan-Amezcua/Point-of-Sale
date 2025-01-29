<?php

include("../connection.php");
$con = connection();

$id_venta_detalle = null;
$cantidad_producto = $_POST['cantidad_producto'];
$precio_unidad = $_POST['precio_unidad'];
// $precio_conjunto = $_POST['precio_conjunto'];
$id_producto_fk = $_POST['id_producto_fk'];
$id_ventas_fk = $_POST['id_ventas_fk'];

$sql = "INSERT INTO venta_detalle (id_venta_detalle, cantidad_producto, precio_unidad, id_producto_fk,id_ventas_fk) VALUES('$id_venta_detalle','$cantidad_producto','$precio_unidad',/*'$precio_conjunto',*/'$id_producto_fk','$id_ventas_fk')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
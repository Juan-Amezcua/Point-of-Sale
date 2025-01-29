<?php

include("../connection.php");
$con = connection();

$id_venta_detalle = $_POST['id_venta_detalle'];
$cantidad_producto = $_POST['cantidad_producto'];
$precio_unidad = $_POST['precio_unidad'];
$precio_conjunto = $_POST['precio_conjunto'];

$sql="UPDATE venta_detalle SET cantidad_producto ='$cantidad_producto', precio_unidad='$precio_unidad', precio_conjunto='$precio_conjunto' WHERE id_venta_detalle='$id_venta_detalle'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>
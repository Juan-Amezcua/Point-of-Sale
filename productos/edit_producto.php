<?php

include("../connection.php");
$con = connection();

$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$categoria_producto = $_POST['categoria_producto'];
$marca_producto = $_POST['marca_producto'];
$modelo_producto = $_POST['modelo_producto'];
$precio_producto = $_POST['precio_producto'];
$stock_producto = $_POST['stock_producto'];
$porcentaje_falla = $_POST['porcentaje_falla'];


$sql="UPDATE productos SET nombre_producto ='$nombre_producto', categoria_producto='$categoria_producto', marca_producto='$marca_producto', modelo_producto='$modelo_producto', precio_producto='$precio_producto', stock_producto='$stock_producto', porcentaje_falla='$porcentaje_falla' WHERE id_producto='$id_producto'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>
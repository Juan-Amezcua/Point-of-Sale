<?php

include("../connection.php");
$con = connection();

$id_venta = $_POST['id_venta'];
$fecha_hora = $_POST['fecha_hora'];
$lugar_venta = $_POST['lugar_venta'];
$gran_total_ventas = $_POST['gran_total_ventas'];

$sql="UPDATE ventas SET fecha_hora ='$fecha_hora', lugar_venta='$lugar_venta', gran_total_ventas='$gran_total_ventas' WHERE id_venta='$id_venta'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>
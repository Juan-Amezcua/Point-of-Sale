<?php

include("../connection.php");
$con = connection();

$id_servicio = $_POST['id_servicio'];
$nombre_servicio = $_POST['nombre_servicio'];
$tipo_tarifa = $_POST['tipo_tarifa'];
$monto_tarifa = $_POST['monto_tarifa'];

$sql="UPDATE servicios SET nombre_servicio ='$nombre_servicio', tipo_tarifa='$tipo_tarifa', monto_tarifa='$monto_tarifa' WHERE id_servicio='$id_servicio'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>
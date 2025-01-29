<?php

include("../connection.php");
$con = connection();

$id_servicio = null;
$nombre_servicio = $_POST['nombre_servicio'];
$tipo_tarifa = $_POST['tipo_tarifa'];
$monto_tarifa = $_POST['monto_tarifa'];
$id_cliente_fk = $_POST['id_cliente_fk'];
$id_colaborador_fk = $_POST['id_colaborador_fk'];

$sql = "INSERT INTO servicios VALUES('$id_servicio','$nombre_servicio','$tipo_tarifa','$monto_tarifa','$id_cliente_fk','$id_colaborador_fk')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
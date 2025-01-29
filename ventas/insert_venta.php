<?php

include("../connection.php");
$con = connection();

$id_venta = null;
// $fecha_hora = $_POST['fecha_hora'];
$lugar_venta = $_POST['lugar_venta'];
// $gran_total_ventas = $_POST['gran_total_ventas'];
$id_cliente_fk = $_POST['id_cliente_fk'];
$id_colaborador_fk = $_POST['id_colaborador_fk'];

$sql = "INSERT INTO ventas (id_venta, lugar_venta, id_cliente_fk, id_colaborador_fk)VALUES('$id_venta',/*'$fecha_hora',*/'$lugar_venta',/*'$gran_total_ventas',*/'$id_cliente_fk','$id_colaborador_fk')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
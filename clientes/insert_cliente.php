<?php

include("../connection.php");
$con = connection();

$id_cliente = null;
$nombre_cliente = $_POST['nombre_cliente'];
$telefono_cliente = $_POST['telefono_cliente'];
$correo_cliente = $_POST['correo_cliente'];
$id_colaborador_fk = $_POST['id_colaborador_fk'];

$sql = "INSERT INTO clientes VALUES('$id_cliente','$nombre_cliente','$telefono_cliente','$correo_cliente','$id_colaborador_fk')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
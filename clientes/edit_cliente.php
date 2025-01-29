<?php

include("../connection.php");
$con = connection();

$id_cliente = $_POST['id_cliente'];
$nombre_cliente = $_POST['nombre_cliente'];
$telefono_cliente = $_POST['telefono_cliente'];
$correo_cliente = $_POST['correo_cliente'];

$sql="UPDATE clientes SET nombre_cliente ='$nombre_cliente', telefono_cliente='$telefono_cliente', correo_cliente='$correo_cliente' WHERE id_cliente='$id_cliente'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>
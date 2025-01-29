<?php

include("../connection.php");
$con = connection();

$nombre_administracion = $_POST['nombre_administracion'];
$domicilio_administracion = $_POST['domicilio_administracion'];
$telefono_administracion = $_POST['telefono_administracion'];

$sql = "INSERT INTO administracion VALUES('$nombre_administracion','$domicilio_administracion','$telefono_administracion')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
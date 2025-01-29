<?php

include("../connection.php");
$con = connection();

$id_colaborador = null;
$nombre_colaborador = $_POST['nombre_colaborador'];
$domicilio_colaborador = $_POST['domicilio_colaborador'];
$telefono_colaborador = $_POST['telefono_colaborador'];
$horario_colaborador = $_POST['horario_colaborador'];
$sueldo_colaborador = $_POST['sueldo_colaborador'];
$nombre_administracion_fk = $_POST['nombre_administracion_fk'];

$sql = "INSERT INTO colaboradores VALUES('$id_colaborador','$nombre_colaborador','$domicilio_colaborador','$telefono_colaborador','$horario_colaborador','$sueldo_colaborador','$nombre_administracion_fk')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
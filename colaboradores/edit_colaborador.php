<?php

include("../connection.php");
$con = connection();

$id_colaborador = $_POST['id_colaborador'];
$nombre_colaborador = $_POST['nombre_colaborador'];
$domicilio_colaborador = $_POST['domicilio_colaborador'];
$telefono_colaborador = $_POST['telefono_colaborador'];
$horario_colaborador = $_POST['horario_colaborador'];
$sueldo_colaborador = $_POST['sueldo_colaborador'];

$sql="UPDATE colaboradores SET nombre_colaborador ='$nombre_colaborador', domicilio_colaborador='$domicilio_colaborador', telefono_colaborador='$telefono_colaborador', horario_colaborador='$horario_colaborador', sueldo_colaborador='$sueldo_colaborador' WHERE id_colaborador='$id_colaborador'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>
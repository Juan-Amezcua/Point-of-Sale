<?php

include("../connection.php");
$con = connection();

$nombre_administracion = $_POST['nombre_administracion'];
$domicilio_administracion = $_POST['domicilio_administracion'];
$telefono_administracion = $_POST['telefono_administracion'];

$sql="UPDATE administracion SET nombre_administracion ='$nombre_administracion', domicilio_administracion='$domicilio_administracion', telefono_administracion='$telefono_administracion' WHERE nombre_administracion='$nombre_administracion'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>
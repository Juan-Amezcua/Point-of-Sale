<?php

include("../connection.php");
$con = connection();

$nombre_administracion=$_GET["nombre_administracion"];

$sql="DELETE FROM administracion WHERE nombre_administracion='$nombre_administracion'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
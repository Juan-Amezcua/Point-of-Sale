<?php

include("../connection.php");
$con = connection();

$id_servicio=$_GET["id_servicio"];

$sql="DELETE FROM servicios WHERE id_servicio='$id_servicio'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
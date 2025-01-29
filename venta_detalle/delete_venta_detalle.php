<?php

include("../connection.php");
$con = connection();

$id_venta_detalle=$_GET["id_venta_detalle"];

$sql="DELETE FROM venta_detalle WHERE id_venta_detalle='$id_venta_detalle'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
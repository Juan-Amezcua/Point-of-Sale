<?php

include("../connection.php");
$con = connection();

$id_colaborador=$_GET["id_colaborador"];

$sql="DELETE FROM colaboradores WHERE id_colaborador='$id_colaborador'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}

?>
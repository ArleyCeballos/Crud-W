<?php
include("conexion.php");
$id_curso = $_GET['id_curso'];

$sql = "delete from curso where id_curso=$id_curso";
$query = mysqli_query($conection, $sql);
if ($query) {
    $_SESSION['message_text'] = 'Dato eliminado satisfactoriamente';
    $_SESSION['message_type'] = 'danger';
    header("Location:index.php");
}

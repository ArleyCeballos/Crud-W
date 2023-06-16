<?php

include("conexion.php");

if (
    !empty($_POST['id_curso'])
    && !empty($_POST['nombre_curso'])
    && !empty($_POST['visible'])
    && !empty($_POST['descripcion'])
    && !empty($_POST['id_categoria'])
    && !empty($_POST['id_grupo'])
    && !empty($_POST['id_cuestionario'])
) {
    $id_curso = $_POST['id_curso'];
    $nombre_curso = $_POST['nombre_curso'];
    $visible = $_POST['visible'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $descripcion = $_POST['descripcion'];
    $id_categoria = $_POST['id_categoria'];
    $id_grupo = $_POST['id_grupo'];
    $id_cuestionario = $_POST['id_cuestionario'];

    $sql = "UPDATE curso SET 
    nombre_curso = '$nombre_curso', 
    visible = '$visible', 
    fecha_ingreso = '$fecha_ingreso',
    descripcion = '$descripcion',
    id_categoria = '$id_categoria',
    id_grupo = '$id_grupo',
    id_cuestionario = '$id_cuestionario' 
    WHERE id_curso = '$id_curso'";

    $query = mysqli_query($conection, $sql);

    if ($query) {
        $_SESSION['message_text'] = 'Dato actualizado satisfactoriamente';
        $_SESSION['message_type'] = 'info';
    } else {
        $_SESSION['message_text'] = 'Error al actualizar el dato: ' . mysqli_error($conection);
        $_SESSION['message_type'] = 'danger';
    }
} else {
    $_SESSION['message_text'] = 'Todos los campos son obligatorios';
    $_SESSION['message_type'] = 'danger';
}

header("Location:index.php");

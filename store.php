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
    $descripcion = $_POST['descripcion'];
    $id_categoria = $_POST['id_categoria'];
    $id_grupo = $_POST['id_grupo'];
    $id_cuestionario = $_POST['id_cuestionario'];

    // Verificar si el registro ya existe
    $existSql = "SELECT * FROM curso WHERE id_curso = '$id_curso'";
    $existQuery = mysqli_query($conection, $existSql);
    $rowCount = mysqli_num_rows($existQuery);

    if ($rowCount > 0) {
        $_SESSION['message_text'] = 'El curso con el ID ' . $id_curso . ' ya existe en la base de datos';
        $_SESSION['message_type'] = 'danger';
    } else {
        $sql = "INSERT INTO curso (id_curso, nombre_curso, visible, descripcion, id_categoria, id_grupo, id_cuestionario) 
            VALUES ('$id_curso', '$nombre_curso', '$visible', '$descripcion', '$id_categoria', '$id_grupo', '$id_cuestionario')";
        $query = mysqli_query($conection, $sql);

        if ($query) {
            $_SESSION['message_text'] = 'Dato insertado satisfactoriamente';
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message_text'] = 'Error al insertar el dato: ' . mysqli_error($conection);
            $_SESSION['message_type'] = 'danger';
        }
    }
} else {
    $_SESSION['message_text'] = 'Todos los campos son obligatorios';
    $_SESSION['message_type'] = 'danger';
}

header("Location:index.php");

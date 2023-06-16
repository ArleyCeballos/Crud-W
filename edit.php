<?php
include("conexion.php");
mysqli_set_charset($conection, "utf8");
$id_curso = $_GET['id_curso'];

$sql = "select * from curso where id_curso=$id_curso";
$query = mysqli_query($conection, $sql);
$row = mysqli_fetch_array($query)


?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1 class="text-center">Actualizar los datos</h1>
        <form action="update.php" method="post">
            <div class="row mb-3">
                <label for="id_curso" class="col-sm-3 col-form-label">Id curso</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="id_curso" name="id_curso" value=<?php echo $id_curso ?> readonly>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nombre_curso" class="col-sm-3 col-form-label">Nombre curso</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" value="<?php echo $row['nombre_curso'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="visible" class="col-sm-3 col-form-label">Es un curso visible?</label>
                <div class="col-sm-9">
                    <select class="form-control" id="visible" name="visible">
                        <option value="Si" <?php if ($row['visible'] == 'Si') {
                                                echo 'selected';
                                            } ?>>Sí</option>
                        <option value="No" <?php if ($row['visible'] == 'No') {
                                                echo 'selected';
                                            } ?>>No</option>
                    </select>
                </div>
            </div>


            <div class="row mb-3">
                <label for="fecha_ingreso" class="col-sm-3 col-form-label">Fecha Ingreso</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value=<?php echo $row['fecha_ingreso'] ?>>
                </div>
            </div>
            <div class="row mb-3">
                <label for="descripcion" class="col-sm-3 col-form-label">Descripcion</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row['descripcion'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="id_categoria" class="col-sm-3 col-form-label">Id categoria</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="id_categoria" name="id_categoria" value=<?php echo $row['id_categoria'] ?>>
                </div>
            </div>
            <div class="row mb-3">
                <label for="id_grupo" class="col-sm-3 col-form-label">Id grupo</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="id_grupo" name="id_grupo" value=<?php echo $row['id_grupo'] ?>>
                </div>
            </div>
            <div class="row mb-3">
                <label for="id_cuestionario" class="col-sm-3 col-form-label">Id cuestionario</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="id_cuestionario" name="id_cuestionario" value=<?php echo $row['id_cuestionario'] ?>>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" onclick="return confirm('¿Estás seguro de que quieres guardar los cambios?')">Actualizar</button>
            <a href="index.php" class="btn btn-primary" onclick="return confirm('¿Estás seguro de que quieres regresar al inicio')">Inicio</a>

        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
include("conexion.php");
mysqli_set_charset($conection, "utf8");
$sql = "select * from curso";
$query = mysqli_query($conection, $sql);


?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD W</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center">Crud Tabla Curso</h2>
        <div class="row">
            <div class="col-9">
                <h3 class="text-center">Ingrese los datos del curso</h3>


                <?php if (isset($_SESSION['message_text'])) { ?>
                    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['message_text']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset();
                } ?>

                <form action="store.php" method="post">
                    <div class="row mb-3">
                        <label for="id_curso" class="col-sm-3 col-form-label">Id curso</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="id_curso" name="id_curso">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nombre_curso" class="col-sm-3 col-form-label">Nombre curso</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="visible" class="col-sm-3 col-form-label">Es un curso visible?</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="visible" name="visible">
                                <option value="Si">Sí</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="descripcion" class="col-sm-3 col-form-label">Descripcion</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descripcion" name="descripcion">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="id_categoria" class="col-sm-3 col-form-label">Id categoria</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="id_categoria" name="id_categoria">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="id_grupo" class="col-sm-3 col-form-label">Id grupo</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="id_grupo" name="id_grupo">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="id_cuestionario" class="col-sm-3 col-form-label">Id cuestionario</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="id_cuestionario" name="id_cuestionario">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>

            </div>

        </div>
        <div class="container">
            <div class="row">

                <h3 class="text-center">Lista de cursos</h3>

                <table class="table table-striped table-hover table-info">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Visible</th>
                            <th scope="col">Fecha ingreso</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Cat-ID</th>
                            <th scope="col">Grp-ID</th>
                            <th scope="col">Cuest-ID</th>
                            <th scope="col" colspan="2" align="center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query)) : ?>
                            <tr>
                                <?php $id_curso = $row['id_curso'] ?>
                                <th scope="row"><?php echo $id_curso ?></th>
                                <td><?php echo $row['nombre_curso'] ?></td>
                                <td><?php echo $row['visible'] ?></td>
                                <td><?php echo $row['fecha_ingreso'] ?></td>
                                <td><?php echo $row['descripcion'] ?></td>
                                <td><?php echo $row['id_categoria'] ?></td>
                                <td><?php echo $row['id_grupo'] ?></td>
                                <td><?php echo $row['id_cuestionario'] ?></td>
                                <td><a href="edit.php?id_curso=<?php echo $id_curso; ?>" class="btn btn-secondary">Editar</a></td>
                                <td><a href="destroy.php?id_curso=<?php echo $id_curso; ?>" class="btn btn-danger"  onclick="return confirm('¿Estás seguro de que quieres eliminar el dato')">Eliminar</a></td>

                            </tr>

                        <?php endwhile; ?>

                    </tbody>
                </table>


            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
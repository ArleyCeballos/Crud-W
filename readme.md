# Proyecto CRUD W

Este proyecto es un CRUD (Create, Read, Update, Delete) en PHP y MySQL para gestionar cursos. Permite agregar, editar y eliminar cursos, así como mostrar una lista de cursos existentes.

## Configuración

Antes de ejecutar el proyecto, asegúrate de seguir estos pasos de configuración:

1.  Clona el repositorio en tu equipo local:

        git clone <URL_DEL_REPOSITORIO>

2.  Configura la conexión a la base de datos en el archivo `conexion.php`. Abre el archivo y modifica los valores de las variables `$hostname`, `$username`, `$password` y `$database` según la configuración de tu entorno:

        <?php
        session_start();
        $conection = mysqli_connect(
            '$hostname',
            '$username',
            '$password',
            '$database'
        ) or die(mysqli_error($mysqli));

3.  Importa la base de datos. Puedes importar el archivo `crud_w.sql` en tu gestor de bases de datos MySQL para crear la estructura y los datos de ejemplo. Puedes ejecutar el siguiente comando en la línea de comandos:

        mysql -u username -p database_name < crud_w.sql

    Reemplaza `username` por tu nombre de usuario de MySQL y `database_name` por el nombre de la base de datos en la que deseas importar la estructura y los datos.

    En este caso se utilizo `HeidiSQL` de `MariaDB` para crear la base de datos por lo cuál puedes seguir los siguientes pasos para ejecutar el codigo:

    1. Abre HeidiSQL y asegúrate de estar conectado a tu servidor de base de datos.
    2. Haz clic derecho en la base de datos seleccionada (puede ser la base de datos por defecto) y elige `Ejecutar archivo SQL` en el menú contextual.
    3. Selecciona el archivo SQL modificado que te proporcioné y haz clic en `Abrir`.
    4. Verifica que el contenido sea el correcto y haz clic en el botón `Ejecutar` (el ícono del rayo en la barra de herramientas) o presiona la tecla F9 para ejecutar la consulta.
    5. HeidiSQL ejecutará el archivo SQL línea por línea. Verifica que no haya errores y que todas las consultas se ejecuten correctamente. Si hay algún error, HeidiSQL mostrará un mensaje de error que te ayudará a identificar el problema.
    6. Una vez que todas las consultas se hayan ejecutado sin errores, la base de datos y las tablas deberían haberse creado correctamente.

Recuerda que debes tener los permisos adecuados y estar conectado al servidor de base de datos con las credenciales correctas para poder crear la base de datos y las tablas.

## Uso

1. Abre el proyecto en tu servidor local o en un servidor web compatible con PHP.

2. Accede a la aplicación en tu navegador web, utilizando la URL correspondiente a tu servidor local o a la dirección del servidor web.

3. Podrás ver la lista de cursos existentes y realizar acciones como agregar nuevos cursos, editar cursos existentes o eliminar cursos.

## Contribuciones

Si deseas contribuir a este proyecto, puedes seguir los pasos a continuación:

1.  Realiza un fork de este repositorio.

2.  Crea una rama para tu nueva funcionalidad o corrección de errores:

        git checkout -b feature/nueva-funcionalidad

    o

        git checkout -b bugfix/correccion-error

3.  Realiza tus cambios y realiza confirmaciones (commits) claros y descriptivos.

4.  Sube tus cambios a tu repositorio fork.

5.  Realiza una solicitud de extracción (pull request) para que podamos revisar tus cambios.

Si encuentras algún problema o tienes alguna sugerencia, no dudes en abrir un issue en el repositorio.

¡Gracias por tu colaboración!

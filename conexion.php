<?php
session_start();
$conection = mysqli_connect(
    'localhost',
    'root',
    'root',
    'crud_w'
) or die(mysqli_error($mysqli));

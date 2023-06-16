<?php
session_start();
$conection = mysqli_connect(
    'localhost',
    'root',
    '@Colombia.01',
    'crud_w'
) or die(mysqli_error($mysqli));

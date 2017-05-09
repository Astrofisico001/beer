<?php

require '../../controllers/Cliente.php';

$nombre = $_POST["name"];
$telefono = $_POST["telefono"];

Cliente()->pruebaInsertarUsuario($nombre, $telefono);


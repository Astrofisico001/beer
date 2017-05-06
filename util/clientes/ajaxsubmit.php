<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../../controllers/Cliente.php';

$nombre = $_POST["name"];
$telefono = $_POST["telefono"];

$cliente = new Cliente();
$enviarDatos = $cliente->pruebaInsertarUsuario($nombre, $telefono);

<?php

require "../../controllers/Usuario.php";
$usuarios = Usuario::obtenerUsuarios();
$cajeros = Usuario::getUsuarios();


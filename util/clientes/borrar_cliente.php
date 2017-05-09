<?php

require '../../controllers/Cliente.php';
if (isset($_GET["cliente"])) {
    $borrarCliente = new Cliente();
    $cliente=$_GET["cliente"];
    $borrarCliente->borrarCliente($cliente);
    header("Location: ../../views/admin/clientes-panel.php");
}
<?php

if (isset($_GET["reserva_id"])) {
    require '../../controllers/Reserva.php';
    $reservas=new Reserva();
    $reserva=$_GET["reserva_id"];
    $reservas->borrarReserva($reserva);
    header('Location: http://localhost/admintemplate/views/admin/reservas-panel.php');
}
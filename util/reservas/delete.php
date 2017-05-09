<?php

if (isset($_GET["reserva_id"])) {
    require '../../controllers/Reserva.php';
    $reserva = $_GET["reserva_id"];
    Reserva()->borrarReserva($reserva);
    //retornamos a la pagina inicial
    header('Location: http://localhost/admintemplate/views/admin/reservas-panel.php');
}
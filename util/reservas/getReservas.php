<?php
require '../../controllers/Reserva.php';
$reservas = Reserva::obtenerReservas();
?>
<?php foreach ($reservas as $row) {
    ?>
    <tr>
        <td><?php print $row["fecha_reserva"]; ?></td>
        <td><?php print $row["producto"]; ?></td>
        <td><?php print $row["cantidad"]; ?></td>
        <td> <a class="btn-flat waves-effect " href="#modal1"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Modal Header</h4>
                    <p>modal 1</p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
            </div>
            <a class="btn-flat small" href="../../util/reservas/delete.php?reserva_id=<?php print $row["reserva_id"]; ?>" aria-label="Delete" onClick="javascript: return confirm('¿Confirmar Borrado de Reserva?');">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>

            <a class="btn-flat waves-effect " href="#modal2"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <a class="waves-effect waves-light btn">Modificar</a>
                        </form>
                    </div>
                </div>
            </div>
        </td>
    </tr>
<?php } ?>
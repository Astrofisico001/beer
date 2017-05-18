<html>
    <head>
        <?php include '../../util/html-generic/head-links-and-scripts.php'; ?>
        <title>Panel ADM V 1.0</title>
    </head>
    <body>
        <script>
            $(document).ready(function () {
                $(".button-collapse").sideNav();
                $('#table-reservas').DataTable();
                $("select").val('10'); //seleccionar valor por defecto del select
                $('select').addClass("browser-default"); //agregar una clase de materializecss de esta forma ya no se pierde el select de numero de registros.
                $('select').material_select(); //inicializar el select de materialize
                $('ul.tabs').tabs('select_tab', 'tab_id');
                $('.modal').modal();
                $('.modal2').modal();
            });
        </script>
        <!-- Header-->
        <?php include './header.php'; ?>
        <!-- End-Header -->
        <div class="row">
            <div class="row">
                <div class="col m2"></div>
                <div class="col m10">
                    <table id="table-reservas">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //obtenemos todas las reservas desde un archivo PHP
                            include '../../util/reservas/getReservas.php';
                            ?>  
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </body>
</html>
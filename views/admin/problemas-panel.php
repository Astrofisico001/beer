<html>
    <head>
        <?php include '../../util/html-generic/head-links-and-scripts.php'; ?>
        <title>Panel ADM V 1.0</title>
    </head>
    <body>
        <?php
        ?>  
        <script>
            $(document).ready(function () {
                $(".button-collapse").sideNav();
                $('#table-users').DataTable();
                $("select").val('10'); //seleccionar valor por defecto del select
                $('select').addClass("browser-default"); //agregar una clase de materializecss de esta forma ya no se pierde el select de numero de registros.
                $('select').material_select(); //inicializar el select de materialize
                $('ul.tabs').tabs('select_tab', 'tab_id');
            });
        </script>
        <?php include '../../util/html-admin/header.php'; ?>
        <div class="row">
            <div class="row">
                <div class="col m2"></div>
                <div class="row">

                </div>
            </div>
        </div>
    </body>
</html>
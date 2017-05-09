<html>
    <head>
        <?php include '../../util/html-generic/head-links-and-scripts.php'; ?>
        <title>Panel ADM V 1.0</title>
    </head>
    <body>
        <?php
        //obtenemos los objetos que contienen usuarios-cajeross
        include '../../util/usuarios/getUsuarios.php';
        ?>  
        <script src="../../util/cajeros/cajeros_panel.js" type="text/javascript"></script>
        <!-- Header -->
        <?php include '../../util/html-admin/header.php'; ?>
        <!-- Content -->
        <div class="row">
            <div class="col m2"></div>
            <div class="col s12 m9">
                <?php foreach ($usuarios as $row) { ?>        
                    <div class="card col m3 s12">
                        <div class="card-image">
                            <img src="../../img/3.jpg" alt=""/>
                            <span class="card-title"><?php echo $row["nombre_completo"]; ?></span>
                            <a class="btn-floating halfway-fab waves-effect">
                                <img src="<?php echo "../../" . $row["img_url_perfil"]; ?>" alt=""/>
                            </a>    
                        </div>
                        <div class="card-content">
                            <p><?php echo $row["tipo_usuario"]; ?></p>
                            <p>Ultimo Ingreso: Hoy a las 19:00 pm.</p>
                            <p>
                                <?php
                                if (Usuario::retornarEstado($row["usuario_id"])) {
                                    ?> Conectado <?php
                                } else {
                                    ?>
                                    Desconectado <?php } ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div><br>
            <div id="modal-add" class="modal">
                <?php include '../../util/cajeros/add_cajeros.php'; ?>
            </div>
            <a class="btn-floating btn-large waves-effect darken-2" href="#modal-add"><i class="material-icons">add</i></a>
        </div>
        <div class="row">
            <div class="col m2"></div>

            <div class="col m10">
                <table id="table-users">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>               
                        <?php foreach ($cajeros as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row["nombre_completo"]; ?></td>
                                <td><?php echo $row["telefono"]; ?></td>
                                <td><?php echo $row["correo"]; ?></td>
                                <td> <a class="btn-flat waves-effect " href="#modal1"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <!-- Modal Structure -->
                                    <div id="modal1" class="modal">
                                        <div class="modal-content">
                                            <div class="row valign-wrapper">
                                                <div class="col s2">
                                                    <img src="<?php echo "../../" . $row["img_url_perfil"]; ?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                                </div>
                                                <div class="col s10">
                                                    <span class="black-text">
                                                        <?php echo $row["nombre_completo"]; ?><hr><br>
                                                        <?php echo $row["correo"]; ?><br>
                                                        <?php echo $row["telefono"]; ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <a class="btn-flat small" href="../../util/cajeros/delete_cajeros.php?usuario=<?php echo $row["usuario_id"]; ?>" aria-label="Delete" onClick="javascript: return confirm('¿Confirmar Borrado de Cajero?');">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn-flat waves-effect " href="#modal2"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <!--  <div id="modal2" class="modal">
                                          <div class="modal-content">
                                              <div class="row">
                                                  <form method="POST" action="#" class="col s12">
                                                      <div class="row">
                                                          <div class="input-field col s6">
                                                              <input placeholder="Placeholder" id="nombre" name="nombre" type="text" value="<?php echo $row["nombre_completo"]; ?>" class="validate">
                                                              <label for="nombre">Nombre</label>
                                                          </div>
                                                          <div class="input-field col s6">
                                                              <input id="telefono" name="telefono" type="text" class="validate" value="<?php echo $row["telefono"]; ?>">
                                                              <label for="telefono">Telefono</label>
                                                          </div>
                                                      </div>
                                                      <div class="row">
                                                          <div class="input-field col s12">
                                                              <input id="email" name="email" type="email" class="validate" value="<?php echo $row["correo"]; ?>">
                                                              <label for="email">Email</label>
                                                          </div>
                                                      </div>
                                                      <input class="waves-effect waves-light btn" type="submit" name="actualizar" value="Modificar"/>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>-->
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div> 
    </body>
</html>
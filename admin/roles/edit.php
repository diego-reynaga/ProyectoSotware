<?php

$id_rol = $_GET['id'];
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/roles/datos_de_roles.php');


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12">
                    <h1>Editar Rol: <?= $nombres_rol ?? ''; ?></h1>
                </div>
            </div>
            <br>
            <form action="<?=APP_URL;?>/app/controllers/roles/update.php" method="post">
                <div class="row">
                <div class="col-md-6">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">Datos Registrados</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nombre del Rol</label>
                                <input type="text" name="id_rol" value="<?= $id_rol ?? ''; ?>" class="form-control" hidden>
                                <input type="text" name="nombre_rol" value="<?= $nombres_rol ?? ''; ?>" class="form-control">
                            </div>
                            <hr>
                            <!-- confirmas si esta bien los iconos para los dos -->
                            <button type="submit" class="btn btn-success"><i class="bi bi-floppy-fill"></i> Actualizar</button>
                            <a href="<?=APP_URL;?>/admin/roles" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


<?php
include('../../admin/layout/parte2.php');
include('../../layout/mensajes.php');
?>
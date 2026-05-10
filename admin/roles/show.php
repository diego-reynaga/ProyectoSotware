<?php

$id_rol = $_GET['id'];
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/roles/datos_de_roles.php');


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Rol: <?= $nombres_rol ?? ''; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datos Registrados</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nombre del Rol</label>
                                <input type="text" value="<?= $nombres_rol ?? ''; ?>" class="form-control" disabled>
                            </div>
                            <hr>
                            <a href="<?=APP_URL;?>/admin/roles" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
include('../../admin/layout/parte2.php');
include('../../layout/mensajes.php');
?>
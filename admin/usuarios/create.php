<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12">
                    <h1>Crear Nuevo Usuario</h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Usuario Nuevo</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?=APP_URL;?>/app/controllers/usuarios/create.php" method="POST">
                                <div class="form-group">
                                    <label for="">Nombre del Usuario</label>
                                    <input type="text" name="nombres_rol" class="form-control" required>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="<?=APP_URL;?>/admin/roles" class="btn btn-secondary">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('../../admin/layout/parte2.php');
include('../../layout/mensajes.php');
?>
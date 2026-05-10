<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/roles/listado_de_roles.php');

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row" ">
                <div class=" col-md-12">
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
                        <form action="<?= APP_URL; ?>/app/controllers/usuarios/create.php" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="rol">Nombre del Rol</label>
                                        <div class="input-group">
                                            <select name="rol_id" id="rol" class="form-control">
                                                <?php foreach ($roles as $role) { ?>
                                                    <option value="<?= $role['id_rol']; ?>"><?= $role['nombres_rol']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <a href="<?= APP_URL; ?>/admin/roles/create.php" class="btn btn-primary">
                                                <i class="bi bi-file-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> Nombre del Usuario </label>
                                        <input type="text" name="nombres" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> Email </label>
                                        <input type="text" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> Password </label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for=""> Repetir Password </label>
                                        <input type="password" name="password_repet" class="form-control" required>
                                    </div>
                                </div>



                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <a href="<?= APP_URL; ?>/admin/usuario" class="btn btn-secondary">Cancelar</a>
                                    </div>
                                </div>
                            </div>
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
<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/roles/listado_de_roles.php');

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Roles</h1>



            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Roles Registrados</h3>

                            <div class="card-tools">
                                <a class="btn btn-primary" href=" create.php"><i class="bi bi-plus-square"></i> Crear
                                    Nuevo Rol</a>

                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-hover" border="1">
                                <thead>
                                    <tr>
                                        <th><center>Nro</center></th>
                                        <th><center>Nombre del Rol</center></th>
                                        <th><center>Acciones</center></th>

                                    </tr>
                                </thead>
                                <?php
                                $contador_rol = 0;
                                foreach ($roles as $role) {
                                    $id_rol = $role['id_rol'];
                                    $contador_rol++;
                                    ?>
                                    <tr>
                                        <td><center><?= $contador_rol; ?></center></td>
                                        <td><?= $role['nombres_rol']; ?></td>
                                        <td style ="text-align: center;">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                                                <button type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>

                                    </tr>

                                    <?php
                                }
                                ?>


                            </table>
                        </div>

                    </div>
                </div>



            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
include('../../admin/layout/parte2.php');
include('../../layout/mensajes.php');
?>
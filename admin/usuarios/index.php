<?php
include('../../app/config.php');
include('../../admin/layout/parte1.php');
include('../../app/controllers/usuarios/listado_de_usuarios.php');

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Listado de Usuarios</h1>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios Registrados</h3>

                            <div class="card-tools">
                                <a class="btn btn-primary" href=" create.php"><i class="bi bi-plus-square"></i> Crear
                                    Nuevo Usuario</a>

                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-striped" border="1">
                                <thead>
                                    <tr>
                                        <th><center>Nro</center></th>
                                        <th><center>Nombres del Usuario</center></th>
                                        <th><center>Rol ID</center></th>
                                        <th><center>Email</center></th>
                                        <th><center>Fecha de Creacion</center></th>
                                        <th><center>Estado</center></th>
                                        <th><center>Acciones</center></th>

                                    </tr>
                                </thead>
                                <?php
                                $contador_usuarios = 0;
                                foreach ($usuarios as $usuario) {
                                    $id_usuario = $usuario['id_usuario'];
                                    $contador_usuarios++;
                                    ?>
                                    <tr>
                                        <td><center><?= $contador_usuarios; ?></center></td>
                                        <td><?= $usuario['nombres']; ?></td>
                                        <td><?= $usuario['rol_id']; ?></td>
                                        <td><?= $usuario['email']; ?></td>
                                        <td><?= $usuario['fyh_creacion']; ?></td>
                                        <td><?= $usuario['estado']; ?></td>
                                        <td style ="text-align: center;">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="show.php?id=<?= $id_usuario;?>" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                <a href="edit.php?id=<?= $id_usuario;?>" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                <!-- <a href="delete.php?id=<?= $id_rol;?>" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a> -->
                                                 <form action="<?=APP_URL?>/app/controllers/roles/delete.php" method="post" id="miFormulario<?=$id_usuario;?>" onclick="preguntar(event)">
                                                    <input type="text" name="id_usuario" value="<?= $id_usuario;?>" hidden>
                                                    <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 0px 5px 5px 0px;"><i class="bi bi-trash"></i></button>
                                                    <script>
                                                        function preguntar(event){
                                                        event.preventDefault();

                                                        Swal.fire({
                                                            title: "¿Estás seguro de eliminar este rol?",
                                                            text: "No se podrá revertir esta acción",
                                                            icon: "warning",
                                                            showDenyButton: true,
                                                            confirmButtonColor: "#d33",
                                                            confirmButtonText: "Sí, eliminar",
                                                            denyButtonColor: "#3085d6",
                                                            denyButtonText: "No, cancelar"
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                var form = $('#miFormulario<?=$id_usuario;?>');
                                                                form.submit();
                                                                // swal("Eliminado", "Se eliminó el rol correctamente", "success");
                                                            }
                                                        });
                                                        }
                                                    </script>
                                                 </form>
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


<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
        "pageLength": 5,
        "language":{
            "empatyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
            "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
            "infoFiltered": "(Filtrado de _MAX_ Usuarios totales)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Usuarios",
            "loadingRecords": "Cargando...",
            // "processing": "Procesando...", que fue esto ya no se considera ?
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
             
        },
        "responsive": true, "lengthChange": true, "autoWidth": false,
        buttons:[{
            extend:'collection',
            text:'Reportes',
            orientation: 'landscape',
            buttons:[{
                text:'Copiar',
                extend:'copy',
            }, 
                {
                extend:'pdf',
            }, {
                extend:'csv',
            }, {
                extend:'excel',
            }, {
                text: 'Imprimir',
                extend:'print'
            }
            ]
        },  
            {
            extend:'colvis',
            text:'Visor de Columnas',
        
        }

        ],

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
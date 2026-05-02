<?php
include('../../../app/config.php'); 

$id_rol = $_POST['id_rol'];
$nombre_rol = $_POST['nombre_rol'];
$nombre_rol = mb_strtoupper($nombre_rol,'UTF-8');
$fechaHora = date("Y-m-d H:i:s");
$estado_de_registro = "activo";

    
if($nombre_rol == ""){
    session_start();
    $_SESSION['mensaje'] = "El nombre del rol es obligatorio";
    $_SESSION['icono'] = "error";
    header('Location: ' . APP_URL . "/admin/roles/edit.php?id=".$id_rol);
    exit;
}else{

$sentencia = $pdo->prepare("UPDATE roles
SET nombres_rol=:nombres_rol, fyh_actualizacion=:fyh_actualizacion
WHERE id_rol =:id_rol");

$sentencia->bindParam(":nombres_rol", $nombre_rol);
$sentencia->bindParam(":fyh_actualizacion", $fechaHora);
$sentencia->bindParam(":id_rol", $id_rol);


}
try{
    if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se actualizó el rol correctamente";
    $_SESSION['icono'] = "success";
    header('Location: ' . APP_URL . "/admin/roles");
    exit;
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo actualizar el rol";
    $_SESSION['icono'] = "error";
    header('Location: ' . APP_URL . "/admin/roles/edit.php?id=".$id_rol);
    exit;
}

}catch(Exception $exception){
    session_start();
    $_SESSION['mensaje'] = "Este rol ya existe, por favor ingrese otro nombre de rol";
    $_SESSION['icono'] = "error";
    header('Location: ' . APP_URL . "/admin/roles/edit.php?id=".$id_rol);
    exit;

}


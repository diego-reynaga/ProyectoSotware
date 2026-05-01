<?php  
include('../../../app/config.php'); 

$nombre_rol = $_POST['nombres_rol'];
$nombre_rol = mb_strtoupper($nombre_rol,'UTF-8');
$fechaHora = date("Y-m-d H:i:s");
$estado_de_registro = "activo";

    
if($nombre_rol == ""){
    session_start();
    $_SESSION['mensaje'] = "El nombre del rol es obligatorio";
    $_SESSION['icono'] = "error";
    header('Location: ' . APP_URL . "/admin/roles/create.php");
    exit;
}else{

$sentencia = $pdo->prepare("INSERT INTO roles (nombres_rol, fyh_creacion, estado) 
VALUES (:nombres_rol, :fyh_creacion, :estado)");

$sentencia->bindParam(":nombres_rol", $nombre_rol);
$sentencia->bindParam(":fyh_creacion", $fechaHora);
$sentencia->bindParam(":estado", $estado_de_registro);


}
try{
    if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se guardó el rol correctamente";
    $_SESSION['icono'] = "success";
    header('Location: ' . APP_URL . "/admin/roles");
    exit;
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se pudo guardar el rol";
    $_SESSION['icono'] = "error";
    header('Location: ' . APP_URL . "/admin/roles/create.php");
    exit;
}

}catch(Exception $exception){
    session_start();
    $_SESSION['mensaje'] = "Este rol ya existe, por favor ingrese otro nombre de rol";
    $_SESSION['icono'] = "error";
    header('Location: ' . APP_URL . "/admin/roles/create.php");
    exit;

}


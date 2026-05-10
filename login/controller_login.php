<?php 
include('../app/config.php');
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email ='$email' AND estado = 'activo'";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
//print_r($usuarios);

$contador = 0;

foreach ($usuarios as $usuario) {
    $password_tabla = $usuario['password'];

    $contador++;

}
// Falta realizar el cambio de  veridity
if(($contador>0) && ($password == $password_tabla)){
    session_start();
    $_SESSION['mensaje'] = "Bienvenido al sistema";
    $_SESSION['icono'] = "success";
    $_SESSION["session_email"] = $email;
    header('Location: ' . APP_URL . "/admin");
    exit;
}else{
    session_start();
    $_SESSION['mensaje'] = "Los datos ingresados son incorrectos, por favor intente nuevamente";
    header('Location: ' . APP_URL . "/login");
    exit;
}

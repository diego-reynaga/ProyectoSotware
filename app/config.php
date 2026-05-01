<?php
define('SERVIDOR', 'localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','gestionestudiante');

define('APP_NAME','SISTEMA DE GESTION DE ESTUDIANTES');
define('APP_URL','http://localhost:8080/GestionEstudiantes');
define('KEY_API_MAPS','');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO("$servidor", USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

   // echo "Conexion exitosa";
}catch(PDOException $e){
    print_r($e);
    echo "Error de conexion a la base de datos";
}
date_default_timezone_set( "America/Lima");
$fechaHora= date(format: 'Y-m-d H:i:s');

$fecha_actual = date(format: 'Y-m-d');
$dia_actual = date(format: 'd');
$mes_actual = date(format: 'm');    
$ano_actual = date(format: 'Y');

$estado_de_registro = "activo";

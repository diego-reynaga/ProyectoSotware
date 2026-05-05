<?php

$sql_usuarios = "SELECT * FROM usuarios WHERE estado = 'activo'";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);
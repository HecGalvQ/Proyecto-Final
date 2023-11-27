<?php

$server = "sql307.infinityfree.com";
$user = "if0_35173840";
$pass = "2ncH7N6o1jgA";
$db = "if0_35173840_PwPFgq";

$conexion = new mysqli($server, $user, $pass, $db);
if ($conexion->connect_errno) {
    die("Conexion fallida" . $conexion->connect_errno);
} else{
    echo"conectado";
}


?>
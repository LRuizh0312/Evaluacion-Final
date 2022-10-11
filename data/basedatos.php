<?php
$db = new mysqli('localhost', 'root', '123456', 'inmobiliaria');
if(!$db){
    echo 'Error al conectar la base de datos';
    exit;
}
?>
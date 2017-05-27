<?php
                    
    $user == $_REQUEST['user'];
    $pass == $_REQUEST['pass'];
    
    include '../Controlador/Controlador.php';
    $controlador = Controlador;
    $this->controlador->registrar($user,$pass);
?>
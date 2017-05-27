<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataBase
 *
 * @author USER
 */
class DataBase {
 private   $servidor="sql10.freesqldatabase.com";
 private   $usuario=" sql10176873";
 private   $clave="i2ptCdajuD";
 private   $base="sql10176873";
    public function Conectar($user, $pass) {
        $link = mysqli_connect($this->servidor, $this->usuario, $this->clave, $this->base);
        if (isset($_POST['sirve']) && !empty($_POST['usuario'])) {

            if (!$link) {
                echo "No se pudo conectar con el servidor ";
            } else {
                mysqli_select_db($link, $base);

                if (!$base) {
                    echo "No se encontro base de datos";
                }
            }


            $sql = "INSERT INTO Cuenta VALUES('$user',' $pass')";
            $ejecutar = mysqli_query($link, $sql);
            if (!$ejecutar) {
                echo"hubo error";
            } else {
                echo" Datos guardados ";
            }
        }
        //$busqueda = mysqli_query($link, "SELECT * FROM persona WHERE usuario = camilo");
        //echo "- Nombre: " . $busqueda['usuario'] . " <br/> ";
    }

}

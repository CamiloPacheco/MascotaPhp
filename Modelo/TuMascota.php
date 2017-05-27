<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TuMascota
 *
 * @author Brandon
 */
require 'Cuenta.php';
require 'Administrador.php';
require 'DataBase.php';
$cuentas = array();

$Administrador = new Administrador("Admin", "Admin", 1);
$DataBase = new DataBase();
$cuentas = array($Administrador);

function registrar($userName, $password) {

    if (validar($userName) != true) {
        
        $this->cuentas[0] = $cuenta = new Cuenta($userName, $password, 3);
        $this->DataBase->Conectar($userName, $password);
        echo " Si funciona ";
    }
}

function validar($userName) {
    foreach ($this->cuentas as &$value) {
        if ($value->getUserName() == $userName) {
            return true;
        }
        return false;
    }

    function validar2($userName, $password) {

        foreach ($this->cuentas as &$value) {
            if ($value->getUserName() == $userName && $value->getPassword() == $password) {
                return true;
            }
            return false;
        }
    }

}

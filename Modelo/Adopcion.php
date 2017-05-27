<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adopcion
 *
 * @author Brandon
 */
require 'Cliente.php';
require 'Animal.php';

class Adopcion {

    private $animal = Animal;
    private $cliente = Cliente;

    function __construct($animal, $cliente) {
        $this->animal = $animal;
        $this->cliente = $cliente;
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Animal
 *
 * @author Brandon
 */
class Animal {
    private $id;
    private $especie;
    function __construct($id, $especie) {
        $this->id = $id;
        $this->especie = $especie;
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Albergue
 *
 * @author Brandon
 */
require 'Animal.php';

class Albergue extends Cuenta {
private $phone;
private $name;


    private $animal = array();
    function __construct($phone,$userName,$password) {
        Cuenta:_constructor($userName,$password,2);
        $this->phone=$phone;
    }

        function agregarAnimales($id, $especie) {
        $sw = 0;
        $key = 0;
        foreach ($this->animal as $key => $ani) {
            if ($ani . getId() == $id) {
                $sw = 1;
            }
        }
        if ($sw == 0) {
            $this->animal[$key] =$animal=new Animal($id, $especie);
        }
    }

}

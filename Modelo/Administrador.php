<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author Brandon
 */
class Administrador Extends Cuenta {

    private $Albergue = array();

    function registrarAlbergue($userName, $password) {
        $sw = 0;
        $key = 0;
        foreach ($this->Albergue as $key => $a) {
            if ($a->getUserName() == $userName) {
                $sw = 1;
            }
        }
        if ($sw == 0) {
            $this->Albergue[$key + 1] = $albergue = new Albergue($userName, $password, 2);
        }
    }

    function getAlbergue() {
        return $this->Albergue;
    }

    function setAlbergue($Albergue) {
        $this->Albergue = $Albergue;
    }

}

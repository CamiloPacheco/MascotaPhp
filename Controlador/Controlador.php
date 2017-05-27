<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author USER
 */
include '../Modelo/TuMascota.php';
include '../Vista/Index.php';
class newPHPClass {
  private $tuMascota=TuMascota;
  function __construct($tuMascota) {
      $this->tuMascota = $tuMascota;
  }
  public function Registrar($UserName,$PassWord) {
      $this->tuMascota->Registrar($UserName, $PassWord);
  }
}

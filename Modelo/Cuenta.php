<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cuenta
 *
 * @author Brandon
 */
class Cuenta {
   
   private $userName;
   private $password;
   private $type;
   function __construct($userName, $password, $type) {
       $this->userName = $userName;
       $this->password = $password;
       $this->type = $type;
   }
   function getUserName() {
       return $this->userName;
   }

   function getPassword() {
       return $this->password;
   }

   function getType() {
       return $this->type;
   }

   function setUserName($userName) {
       $this->userName = $userName;
   }

   function setPassword($password) {
       $this->password = $password;
   }

   function setType($type) {
       $this->type = $type;
   }



}

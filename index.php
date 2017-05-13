<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
<H1 align="center"> Encuentra tu mascota </H1>.
<H2 align = " left "> Iniciar sesión</H2>

<body style="background:#80BFFF">
  <form name="formularioDatos" method="POST" >

  Usuario: <input type="text" name="usuario" value="">
  <br/> <br/>
  Contraseña: <input type="password" name="contraseña" value="">
  <br/> <br/>
  <input value="Iniciar seccion" type="submit" />
 <?php
        
        
 $servidor="localhost";
 $usuario="root";
 $clave="contraseña";
 $base="mascotadatabase";
/* @var $link type */
$link = mysqli_connect($servidor, $usuario, $clave, $base);
mysqli_select_db($link, $base);

   
        
        $user=filter_input(INPUT_POST, 'Usuario');
        $pass=filter_input(INPUT_POST, 'Contraseña');


mysqli_query("INSERT INTO persona(Usuario,Contraseña)values('$user','$pass')");
        ?>
</form>

    </body>
</html>

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
        <?php
        
        $servidor="localhost";
        $usuario="root";
        $clave="contraseña";
        $base="mascotadatabase";
        $mysqli_connect = mysql_connect($servidor, $usuario, $contrseña, $base);
        $mysqli_select_db = mysqli_select_db( $base)
        // put your code here
        ?>
<H1 align="center"> Encuentra tu mascota </H1>.
<H2 align = " left "> Iniciar sesión</H2>

<body style="background:#80BFFF">
  <form name="formularioDatos" method="post" >

  Usuario: <input type="text" name="usuario" value="">
  <br/> <br/>
  Contraseña: <input type="password" name="contraseña" value="">
  <br/> <br/>
  <input value="Iniciar seccion" type="submit" />
 <?php
        
         if ($_POST) {
             $user=$post[usuario];
             $pass=´post[contraseña];
         }
         mysqli_query("insert into persona(Usuario,Contraseña)values('$user','$pass')")or die(mysqli_errno($link));
         echo "dato Guardado";
 // put your code here
        ?>
</form>

    </body>
</html>

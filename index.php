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
        
        
 $servidor="mascotaserver.database.windows.net";
 $usuario="administrador";
 $clave="contraseña";
 $base="MascotaDataBase";

$link = mysqli_connect($servidor, $usuario, $clave, $base);

if (!$link) {
    echo "No se pudo conectar con el servidor ";
}else
   {
    mysqli_select_db($link, $base);
    
    if (!$base) {
        echo "No se encontro base de datos";
    }
    
   }
   
        
        $user="hola";
        $pass="hola";

       $sql ="INSERT INTO persona VALUES('$user',' $pass')";
     $ejecutar= mysqli_query($link, $sql);
if (!$ejecutar) {
    echo"hubo error";
} else {
    echo" Datos guardados ";
}
?>
</form>

    </body>
</html>

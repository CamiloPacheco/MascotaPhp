<!DOCTYPE html>
<html>
<head>
<title>Tu Mascota</title>
<link rel="icon" type="image/png" href="img/dog.png" />
<meta content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="title">
    <h1>Tu <span style="color:#C4DA64;">Mascota</span></h1>
  </div>
  <div id="banner"></div>
  <div class="container">
    <ul id="top-nav">
      <li><a href="index.php">Principal</a></li>
      <li><a class="active" href="#">Iniciar sesion</a></li>
      <li><a href="#">Informacion del grupo</a></li>
    </ul>
  </div>
  <div id="content">
    <h1>Inicio de <span style="font-weight:bold; color:#C4DA64;">Sesion</span></h1>
    <blockquote>
      </blockquote>
    
    <form method="POST" action="TuMascota.php">
		
			Usuario: <input type="text" name="user" value="">
                        <br/> <br/>
			Contraseña: <input type="password" name="pass" value="">
			<br/> <br/>
			<input value="Entrar" type="submit"/>
			
		</form>

		<form method="POST" action="registro.php">
			<input value="Crear una cuenta" type="submit"/>

    </form>


    
    
    
  </div>
  <div id="side">
    <div id="navcontainer">
      
      <h1>Noticias</h1>
      <div class="scroll">
        <h2>Mayo de 2017</h2>
        <p class="news">TuMascota está en linea, encuentra ya un compañero fiel.</p>
        <h2> Abril de 2017</h2>
        <p class="news">Es creado el proyecto TuMacota para ayudar a animales sin hogar a encontrar un dueño</p>
        
      </div>
    </div>
    
  </div>
  <div id="footer"> <a href="#">Acerca del Grupo</a> | <a href="#">Contacto</a>
  </div>
</div>
    
    
    
</body>
</html>

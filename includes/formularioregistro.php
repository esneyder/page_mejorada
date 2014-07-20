<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/normalize.css" />
	<link rel="stylesheet" href="../css/estilo.css" />
	<link type="image/x-icon" href="../imagenes/icono.ico" rel="icon" />
</head>
<body>
	 <header>
		<div class="logo">
			<img src="../imagenes/fullcode.png" alt="fulcode">
		</div>
		
		<div class="titular">

			<h1 class="titulo">
				Contenidos programación
			</h1>
			 
				<a class="filtro" href="#">
					Contáctenos
				</a>
				<div class="siguenos">	
					<div class="sep" >
						<div style="height:20px;margin-top:5px;display:inline-block;"></div>			 
						<a href="#" class="face"><img class="img-t" src="../imagenes/face_seguir.png" alt="Facebook" ></a>
					</div>	
					<div class="sep">
					<div style="height:20px;margin-top:5px;display:inline-block;"></div>		
					<a href="#" class="twit"><img class="img-t" src="../imagenes/twitter.png" alt="Twitter"></a>
					</div>
					<div class="sep">
					<div style="height:20px;margin-top:5px;display:inline-block;"></div>		
					<a href="#" class="goo"><img class="img-t" src="../imagenes/google_plus.png" alt=""></a>
				    </div>
					
				</div>
                 
				<div class="buscador">
					<input type="text" class="txt-b" name="buscar" id="buscar" placeholder="Buscar..">
					<div class="btn-b">
				    <a href="#"><img src="../imagenes/sear.png" alt=""></a>
					</div>
				</div>
 
				
			
		</div>
		 
		<div class="usuario">
			
			<ul class="desplegar">
				<li>
					<a class="publicar" href="#">
					Registrar
					</a>
				</li>
				<li>
					<figure class="avatar">
					<img src="../imagenes/avatar.jpg" alt="fullcode">
					</figure>
					
				</li>
				<li>
					<a class="flechita" href="#"></a>
					<ul>
						<li></li>
						<li class="primerli">Configuración</li>
						<li><a href="#">Perfil</a></li>
						<li>Perfil</li>
						 
					</ul>
				</li>
			</ul>
			
		</div>
	</header>

	 <nav>
		<ul class="menu">
			<li><a href="#">Python</a></li>
			<li><a href="#">HTML5</a></li>
			<li><a href="#">Javascript</a></li>
			<li><a href="#">Django</a></li>
			<li><a href="#">CSS3</a></li>
			<li><a href="#">C#</a></li>
			<li><a href="#">Java</a></li>
			<li><a href="#">Stylus</a></li>
			<li><a href="#">Sql Server</a></li>
			<li><a href="#">Android</a></li>
		</ul>
	</nav>
	<!--FORMULARIO REGISTRO USUARIO-->
	<div class="formregistro">
		<div class="col-regitro">
		<form action="#" class="frmregistro" method="post" name="frmregistro" id="frmregistro">
			
			<div class="lbform">
				<label for="Alias" class="lb">Alias:</label>
			</div>
			<div class="txtform">
				<input type="text" class="txt" name="alias" id="alias">
			</div>
			<div class="lbform">
				<label for="Nombre" class="lb">Nombres:</label>
			</div>
			<div class="txtform">
				<input type="text" class="txt" name="nombre" id="nombre">
			</div>


			<div class="lbform">
				<label for="Apellido uno" class="lb">Primer Apellido:</label>
			</div>
			<div class="txtform">
				<input type="text" class="txt" name="apellidouno" id="apellidouno">
			</div>


			<div class="lbform">
				<label for="Apellido dos" class="lb">Segundo apellido:</label>
			</div>
			<div class="txtform">
				<input type="text" class="txt" name="apellidodos" id="apellidodos">
			</div>
			<div class="lbform">
				<label for="Email" class="lb">Email:</label>
			</div>
			<div class="txtform">
				<input type="email" class="txt" name="email" id="email">
			</div>
			<div class="lbform">
				<label for="Genero" class="lb">Genero:</label>
			</div>
			<div class="txtform">
				  
				 <input class="txt" list="browsers" name="browser" id="genero">
				<datalist id="browsers" class="lis">
				  <option value="Masculino">
				  <option value="Femenino">
				</datalist>
			</div>

			<div class="lbform">
				<label for="Usuario" class="lb">Usuario:</label>
			</div>
			<div class="txtform">
				<input type="text" class="txt"  name="usuario" id="usuario">
			</div>
			<div class="lbform">
				<label for="Password" class="lb">Password:</label>
			</div>
			<div class="txtform">
				<input type="Password" class="txt" name="password" id="password">
			</div>
		    <div class="botones">
		        <input type="submit" class="btn-registro" value="Registrar">
			</div>	 
			 
		</form>
	</div>
</div>
	<!--
    <div class="col-regitro">
     <form action="#" class="frmloginregistro" method="post" name="login" id="login">
     	<div class="lbform">
     		<label for="Email" class="lb">Email:</label>
     	</div>
     	<di class="txtform">
     		<input type="text" class="txt">
     	</di>
     </form>
	</div>
-->
<footer>
		<h3>
			<strong>Powered by Esneyder</strong>
			<span class="mejor">
				Edwin Esneyder
			</span>
		</h3>
	</footer>
<div class="redes">
	<div>
		<a href="www.facebook.com"></a>
		<figure>
			<img src="../imagenes/Facebook.png" alt="Facebook"  >
		</figure>
	</div>
	<div>
		<a href="www.twiter.com"></a>
		<figure>
			<img src="../imagenes/twitter.png" alt="">
		</figure>
	</div>
	<div>
		<a href="www.linkeding.com"></a>
	</div>
</div>
</body>
</html>
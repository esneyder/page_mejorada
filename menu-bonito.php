<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Full:Code</title>
         <link type="image/x-icon" href="imagenes/icono.ico" rel="icon" />
<link rel="stylesheet" href="css/estilo-menu.css">
<link rel="stylesheet" href="css/animate.css">
<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  -->
  <script src="js/jquery.js"></script>
 <script src="js/funciones.js"></script>


</head>
<body>
	<header>
	<div class="header-container">
    <a href="#" class="menu-button"><span  class="imenu"></span><span class="t-menu">Menú</span></a>


    <div class="logo"><a href="#"><img src="imagenes/logo-full-code.png" alt="lfull:Code"></a></div>
    <a href="#"class="search-b" ><img src="imagenes/search.png" class="search-h" alt="Search"></a>

    <div class="txt-buscador">
    	<input type="text" class="txt-search" placeholder="Buscar..." name="search" id="search">
    </div>

    <a href="#" class="login-button"><img src="imagenes/User-Profile.png" height="30" alt="User">
        <span class="text-login">Ingresar</span>
    </a>
	</header>

    </div>

	<nav class="nav-menu">
        <ul>
             <li><a href="#">
                <img src="imagenes/back.png" alt="Atras"  width="33">
                 <span>Atras</span>
             </a>
          </li>

             <li><a href="#"><img src="imagenes/Home.png" alt="Home" width="33">
                <span>Inicio</span></a></li>

              <li><a href="#">Categorias</a>
                <ul>
                     <li><a href="#"></a></li>
                     <li><a href="#">Desarrollo web</a></li>
                     <li><a href="#">Desarrollo móvil</a></li>
                     <li><a href="#">Base de datos</a></li>
                     <li><a href="#">Móvil</a></li>
                </ul>
              </li>
             <li><a href="#">Cursos</a></li>
              <li><a href="#">Mas vistos</a>
                   <ul>
                     <li><a href="#"></a></li>
                     <li><a href="#">Programmer</a></li>
                     <li><a href="#">PHP</a></li>
                </ul>
              </li>
              <li><a href="#">Tutoriales</a>
                   <ul>
                     <li><a href="#"></a></li>
                     <li><a href="#">Base de datos</a></li>
                     <li><a href="#">Móvil</a></li>
                </ul>
              </li>
             <li><a href="#">Contacto</a></li>
         </ul>
	</nav>
    <!-- formulario  login -->
     <div class="login">
            <h2 class="titulologin">Iniciar sesión</h2>
            <div class="salirlogin"><a href="#" class="exit">X</a></div>
            <hr>
           <div class="redessociales">
            <div class="loginface">
            <a href="#" class="f"><img src="imagenes/face_seguir.png" alt="Facebook"><span class="t-loginface">Facebook</span></a>
          </div>
          <div class="logingo">
            <a href="#" class="g"> <img src="imagenes/google_plus.png" alt="Google"><span class="t-logingoogle">Google</span></a>

         </div>

        </div>
  <form action="javascript:val(0)" class="formulariologin" method="post">
        <label for="usuario" name="usuario" >Usuario:</label><input  name="usuario" type="text" class="txt-login" placeholder="Usuario o Email">
         <label for="Password" name="password">Password:</label><input name="password" type="password" class="txt-login" placeholder="Password">
           <a href="#" class="ocontrasena">¿Olvidaste la contraseña?</a>
          <div class="btn-formlogin">

          <input type="submit" value="Ingresar" class="btn-login">
       </div>
       <div class="registrarme">
        <p class="crearcuenta">No tengo aún cuenta.</p>
           <input type="submit" value="Registrarme" class="btn-registrar">
       </div>
       </form>


</div>
<!-- posts-> contenidos publicaciones -->

    <div class="contenido">


             <article class="post">
            <div class="descripcion">


                   <div class="cabtitulo">

                        <h1 class="titulo">
                              Programador
                        </h1>
                        <a class="tag" href="#">Desarrollo</a>
                    </div>


                    <figure class="imagen">
                        <img src="imagenes/posts.png" />
                    </figure>

                    <div class="detalles">

                             <div class="resumen">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, ea deserunt, id harum libero dolore distinctio.
                             </div>

                        <div class="detinfo">



                                      <strong>Por </strong><a href="#" class="autor">Edwin Esneyder</a>

                                    <div class="fecha">hace <strong>20</strong> min</div>
                        </div>
                </div>

            </div>


            <div class="acciones">
                <div class="votos">
                    <a class="up" href="#"></a>
                    <span class="total">100<span>
                    <a class="down" href="#"></a>
                </div>

                <div class="social">
                    <a class="megusta" href="#"><img src="imagenes/like.png" alt=""></a>
                    <a class="compface" href="#"><img src="imagenes/facebook_square.png" alt=""></a>
                    <a class="comptwitter" href="#"><img src="imagenes/twitter_square.png" alt=""></a>
                    <a class="comppinteres" href="#"><img src="imagenes/linkedin_square.png" alt=""></a>

            </div>
              <div class="datos">
                 <a class="comentarios" href="#">10</a>
               <a class="estrellita" href="#"></a>
                </div>
            </div>
            </article>

             <article class="post">
            <div class="descripcion">


                   <div class="cabtitulo">

                        <h1 class="titulo">
                              Programador
                        </h1>
                        <a class="tag" href="#">Desarrollo</a>
                    </div>


                    <figure class="imagen">
                        <img src="imagenes/posts.png" />
                    </figure>

                    <div class="detalles">

                             <div class="resumen">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, ea deserunt, id harum libero dolore distinctio.
                             </div>

                        <div class="detinfo">



                                      <strong>Por </strong><a href="#" class="autor">Edwin Esneyder</a>

                                    <div class="fecha">hace <strong>20</strong> min</div>
                        </div>
                </div>

            </div>


            <div class="acciones">
                <div class="votos">
                    <a class="up" href="#"></a>
                    <span class="total">100<span>
                    <a class="down" href="#"></a>
                </div>

                <div class="social">
                    <a class="megusta" href="#"><img src="imagenes/like.png" alt=""></a>
                    <a class="compface" href="#"><img src="imagenes/facebook_square.png" alt=""></a>
                    <a class="comptwitter" href="#"><img src="imagenes/twitter_square.png" alt=""></a>
                    <a class="comppinteres" href="#"><img src="imagenes/linkedin_square.png" alt=""></a>

            </div>
              <div class="datos">
                 <a class="comentarios" href="#">10</a>
               <a class="estrellita" href="#"></a>
                </div>
            </div>
            </article>
             <article class="post">
            <div class="descripcion">


                   <div class="cabtitulo">

                        <h1 class="titulo">
                              Programador
                        </h1>
                        <a class="tag" href="#">Desarrollo</a>
                    </div>


                    <figure class="imagen">
                        <img src="imagenes/posts.png" />
                    </figure>

                    <div class="detalles">

                             <div class="resumen">
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, ea deserunt, id harum libero dolore distinctio.
                             </div>

                        <div class="detinfo">



                                      <strong>Por </strong><a href="#" class="autor">Edwin Esneyder</a>

                                    <div class="fecha">hace <strong>20</strong> min</div>
                        </div>
                </div>

            </div>


            <div class="acciones">
                <div class="votos">
                    <a class="up" href="#"></a>
                    <span class="total">100<span>
                    <a class="down" href="#"></a>
                </div>

                <div class="social">
                    <a class="megusta" href="#"><img src="imagenes/like.png" alt=""></a>
                    <a class="compface" href="#"><img src="imagenes/facebook_square.png" alt=""></a>
                    <a class="comptwitter" href="#"><img src="imagenes/twitter_square.png" alt=""></a>
                    <a class="comppinteres" href="#"><img src="imagenes/linkedin_square.png" alt=""></a>

            </div>
              <div class="datos">
                 <a class="comentarios" href="#">10</a>
               <a class="estrellita" href="#"></a>
                </div>
            </div>
            </article>
    </div>
    </body>
</html>

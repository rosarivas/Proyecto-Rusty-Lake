<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>home</title>
</head>
<body>
    
<h1>BIENVENIDOS</h1>
<body background="Imagenes/fondo.png">
   <!---------------------Trabajo------------------------------>
   <nav> 
    <div id="logo"></div>

    <ul>
      <li><a href="#">inicio</a></li>
      <li><a href="#">acerca de nosotros</a></li>
      <li><a href="#">contacto</a></li>
     
    
    </ul>
</nav>  
<div class="Titulo">
    <h2 id="slider-text">Felicidades encontraste el Case23</h1><br>
</div>

<!--------------------------------Carrusel------------------------>
<ul class="slides">

<!--radio---buttom--img--1-->
<input type="radio" name="radio-btn" id="img-1" checked />
<li class="slide-container">
<div class="slide">
    <img src="Imagenes/a.jpg">
</div>
<div class="nav">
    <label for="img-3" class="prev">&#x2039;</label>
    <label for="img-2" class="next">&#x203a;</label>
</div>
</li>

<!--radio---buttom--img--2-->
<input type="radio" name="radio-btn" id="img-2"  />
<li class="slide-container">
<div class="slide">
  <img src="Imagenes/bb.webp" >
</div>
<div class="nav">
  <label for="img-1" class="prev">&#x2039;</label>
  <label for="img-3" class="next">&#x203a;</label>
</div>
</li>

<!--radio---buttom--img--3-->
<input type="radio" name="radio-btn" id="img-3"  />
<li class="slide-container">
<div class="slide">
  <img src="Imagenes/aa.webp">
</div>
<div class="nav">
  <label for="img-2" class="prev">&#x2039;</label>
  <label for="img-1" class="next">&#x203a;</label>
</div>
</li>


<!--DOTS-->
<li class="nav-dots">
<label for="img-1" class="nav-dot" id="img-dot-1"></label>
<label for="img-2" class="nav-dot" id="img-dot-2"></label>
<label for="img-3" class="nav-dot" id="img-dot-3"></label>
</li>


</ul>
<br></br>

<div class="contenedor"></div>
<!-----------Texto 1-->
<div>
<h2>Es el quinto juego de la serie Cube Escape, lanzado en julio de 2015. En este juego, asumes el papel del detective Dale Vandermeer. Como jugador, debes investigar la misteriosa muerte de la Mujer. Reúne todas las pruebas y descubre la puerta de entrada a Rusty Lake .</h3>
<br></br>
<h2>La Escena del Asesinato es la residencia y lugar de muerte de la Mujer , cuya muerte Dale Vandermeer es enviado a investigar. Es la habitación delantera de una casa más grande, con The Room como otra parte.</h2>
</div>
<footer>

<!------------------carrusel que se mueve 7w7------------>
<div id="slider5"></div>
<!-----------------Texto 2----------------->
<br></br>
<h2>Escenas de crimen cubos</h2>
<table>
<tr>
      <td><img  src="Imagenes/g.jpg"><h3>La estación de policía</h3></td>
      <td><img  src="Imagenes/6.jpg"><h3>La escena del crimen</h3></td>
      <td><img  src="imagenes/7.jpg"><h3>La capilla</h3></td>
      <td><img  src="Imagenes/i.jpg"><h3>La cabina</h3></td>
</tr>
</table>
<div>
<h3 id="q">¿Donde esta ella?</h3>
<h5> me desperté en esta habitación
    Me sentí diferente, menos real</h6>
<h6>un lugar para vaciar la mente, reflexionar sobre el pasado y el futuro</h6>
<iframe width="860" height="515" src="https://www.youtube.com/embed/tFDNlSeeUXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div id="slider5"></div>
<table>
    <tr>
          <td><img  src="Imagenes/2.webp"><h3>La estación de policía</h3></td>
          <td><img  src="Imagenes/aa.webp"><h3>La escena del crimen</h3></td>
          <td><img  src="imagenes/ñ.jpg"><h3>La capilla</h3></td>
          <td><img  src="Imagenes/10.jpg"><h3>La cabina</h3></td>
    </tr>
    </table>

</footer>
   <br></br>
   <!----Contraseña----------------------------
    <div id="usuario">
       <form action="validar.php" method="post">
           <h1 class="animate__animated animate__backInLeft">Deja que los cubos te guien</h1><br></br>
           <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
          <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
          <input type="submit" value="Ingresar">
          <br></br>         <br></br>
   
        </form> 
    </div> 
-------------------------->
  
</body>
</html>
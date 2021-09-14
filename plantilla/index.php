<!DOCTYPE html>
<html lang="es">
<head>
<title>GameLand</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body>

<header>
  <div class="main">
    <div class="wrap">
      <h1><img src="images/portada.png" alt="" width="375" height="100"></h1>
      <div class="tooltips"><h2 class="login"><a href="#">Registrarse</a>-Log in:</h2>
        <form class="login" action="" method="post">
          <input type="text" class="log" name="nombre" placeholder="usuario"> 
          <input type="password" class="log" name="clave" placeholder="contraseña"> 

          <input type="submit" class="log1" value="Ingresar">
          <div><?php echo isset($alert) ? $alert : '';  ?></div>
        </form>
      </div>
      
    </div>
    <div class="nav-shadow">
      <div>
        <nav>
          <ul class="menu">
            <li class="current"><a href="#">Home</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Usuarios</a></li>
            <li><a href="#">Estadisticas</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="header-content">
    <div class="wrap main">
      <div class="block-1"> <img src="images/tienda.png" alt="" class="img-radius" width="285" height="200">
        <div class="border-1">
          <p class="color-1 p2">Tienda Principal</p>
          <p>Sucursal principal, es la primera y la que tiene mas stock.Principalmente dedicada a las computadoras y al servicio tecnico.</p>
          <a href="#" class="button top-1">Productos</a> </div>
      </div>
      <div class="block-1"> <img src="images/tienda.png" alt="" class="img-radius" width="285" height="200">
        <div class="border-1">
          <p class="color-1 p2">Sucursal</p>
          <p>Segunda sucursal, abierta hace poco, esta sucursal es mas enfocada a tecnologia general.</p>
          <a href="#" class="button top-1">Productos</a> </div>
      </div>
      <div class="block-1"> <img src="https://profesordelengua.files.wordpress.com/2017/08/img_9632.png?w=768" alt="" class="img-radius" width="285" height="200">
        <div>
          <p class="color-1 p2">Tienda 3</p>
          <p>Proxima sucursal, es el proyecto mas grande del equipo de GameLand, buscamos crear la sucursal mas grande y con mas stock de todas.</p>
          <a href="#" class="button top-1">Proximamente</a> </div>
      </div>
    </div>
  </div>
</header>

<section id="content">
  <div>
    <div class="wrap">
      <div class="col-1 border-2">
        <h2 class="p3">Quienes somos?</h2>
        <div class="wrap"> <img src="images/team.png" width="250" height="150" alt="" class="img-indent img-radius">
          <p class="extra-wrap"> Somos una tienda de hardware, software, y videojuegos. Hace poco abrimos la segunda sucursal, y proximanmente abriremos una tercera, esperamos que encuentren lo que buscan en nuestra tienda.</p>
        </div>
        <div class="wrap top-2">
          <ul class="list-1 fleft">
            <li>Ofrecemos productos de ultima gama</li>
            <li>Tambien ofrecemos productos no tan comunes</li>
            <li>Toda la mercancia tiene garantia</li>
            <li>Poseemos distribuidores de todo el mundo</li>
          </ul>
          <ul class="list-1 fleft">
            <li>Buscamos gente quiere ser parte de el proyecto</li>
            <li>Cualquier sugerencia es bienvenida</li>
            <li>Abrimos casi todos los dias</li>
            <li>Siempre buscaremos mejorar nuestro servicio</li>
          </ul>
        </div>
          </div>
      <div class="col-2">
        <h2 class="p2">Estadisticas</h2>
        <a href="#" class="link-2">Productos</a>
        <p class="p6">Informacion de venta de todos los productos vendidos.</p>
        <a href="#" class="link-2">Empleados</a>
        <p class="p6">Quien sera el mejor empleado en ventas?.</p>
        <a href="#" class="link-2">Ventas</a>
        <p>Cual de nuestras dos sucursales es la mas eficiente en ventas?.</p>
        <a href="estadisticas.php" class="button-1 top-1">Ver todo</a> </div>
    </div>
  </div>
</section>

<footer>
  <p>Telefono: +54 800 559 6580 &nbsp; Email: <a href="#" class="link">GameLand@gmail.com</a></p>
</footer>
</body>
</html>

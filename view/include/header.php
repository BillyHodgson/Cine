<head>
<title>TicoCines</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="./assets/layout/styles/layout.css" type="text/css" />
<div class="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="index.php">Cine Tico</a></h1>
      <p>Su cine Favorito</p>
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <?php if(isset($_SESSION['usuarioLogueado'])): ?>
        <li><a>Mantenimiento de películas</a>
            <ul>
                        <li> 
                            <a href="index.php?controller=peliculas&action=formularioregistrar">Registrar Peliculas</a>
                            <a href="index.php">Listar Peliculas</a>
                        </li>
             </ul>
         </li>
        <li><a>Mantenimiento de Género</a>
                <ul>
                        <li>
                            <a href="index.php?controller=generos&action=formularioregistrar">Registrar Genero</a>
                           
                            <a href="index.php?controller=generos&action=listar">Listar Genero</a>
                        </li>
                </ul>      
        </li>
        <?php endif;?>
        <?php if(isset($_SESSION['usuarioLogueado'])): ?>
        <li>   
         <a href="index.php?controller=administrador&action=cerrarSesion">Cerrar Sesion</a>
        </li>
        <?php else:?>
        <li>
        <a href="index.php?controller=administrador&action=mostrarLogin">Ingresar</a>    
        </li>
        <?php endif;?>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
</head>

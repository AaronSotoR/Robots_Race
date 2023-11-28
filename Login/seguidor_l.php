<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- Bootstrap CSS (puedes cambiar la versión según tus necesidades) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/1631a256fd.js" crossorigin="anonymous"></script>
  <!-- Agrega tus propios estilos CSS aquí si es necesario -->
  <style>
    /* Estilos personalizados pueden ir aquí */
    body {
      padding-top: 56px;
      /* Altura de la barra de navegación */
    }

    .navbar-logo {
      max-height: 40px;
      /* Ajusta la altura del logo según sea necesario */
    }

    /* Estilo personalizado para el menú lateral */
    .sidebar {
      position: fixed;
      /* Fija la posición del menú lateral */
      height: 100%;
      /* Ocupa el 100% de la altura de la pantalla */
      top: 0;
      /* Coloca el menú en la parte superior */
      left: 0;
      /* Coloca el menú en el borde izquierdo */
      z-index: 1;
      /* Asegura que esté en la capa superior para superponerse al contenido principal */
      padding-top: 56px;
      
      /* Altura de la barra de navegación (ajusta según sea necesario) */
    }

    /* Ajusta el contenido principal para dar espacio al menú lateral */
    .main-content {
      margin-left: 200px;
      /* Ajusta el margen izquierdo según el ancho del menú lateral */
      padding: 15px;
      

      
    }

    .colors{
      
      background: #176981;


    }
  </style>
</head>

<body>

  <!-- Barra de Navegación -->
  <nav class="navbar navbar-expand-lg colors fixed-top">
    <a class="navbar-brand" href="#">
      <img src="https://upsrj.edu.mx/wp-content/uploads/2019/06/isoheart.png" alt="Logo" class="navbar-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-white " href="#"><i class="fa-solid fa-right-from-bracket"></i></a>

        </li>
      </ul>
    </div>
  </nav>

  <!-- Sidebar -->
  <nav class="col-md-2 d-none d-md-block colors sidebar">
    <div class="sidebar-sticky">
      <h2 class="text-white">Menú</h2>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-white" href="./home.php">
            Home
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="competenciaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Competencia
          </a>
          <div class="dropdown-menu" aria-labelledby="competenciaDropdown">
            <a class="dropdown-item" href="./zumo_robot.php">Zumo Robot</a>
            <a class="dropdown-item" href="./seguidor_l.php">Seguidor De Linea</a>
            <!-- Agrega más opciones de submenú según sea necesario -->
          </div>
        </li>
           
        <li class="nav-item">
          <a class="nav-link text-white" href="#">
            Opción 2
          </a>
        </li>
        <!-- Agrega más opciones según sea necesario -->
      </ul>
    </div>
  </nav>

  <!-- Contenido principal -->
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 main-content">
    <!-- Tu contenido va aquí -->
    <h1>Seguidor de Linea</h1>
    <p>Informacion del evento</p>
  </main>

  </div>
  </div>

  <!-- Bootstrap JS (asegúrate de incluir jQuery y Popper.js antes) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Agrega tus propios scripts JavaScript aquí si es necesario -->

</body>

</html>
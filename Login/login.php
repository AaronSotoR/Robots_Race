<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Inicio de Sesión</title>
  <!-- Agrega el enlace al archivo de estilo de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    /* Agrega tu estilo personalizado aquí si es necesario */

    .image-container {
      /* Ajusta el estilo según tus necesidades */
      background: url('https://okeyqueretaro.mx/wp-content/uploads/2023/02/las-Ciencias.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh;
      width: 75vh;
      filter: blur(1px);
    }

    .form-container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
    }

    form {
      background-color: white;  
      width: 300px;
    }

    
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 image-container">
        <!-- Contenido de la imagen -->
      </div>
      <div class="col-md-4 form-container">
        <form action="controlador_login.php" method="post">
          <h2 class="text-center">Iniciar Sesión</h2>

          <div class="form-group">
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
          </div>

          <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
          <br>
          <a href="#" class="btn btn-primary btn-block">Crear usuario</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Agrega el enlace al archivo de script de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
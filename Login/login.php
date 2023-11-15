<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Inicio de Sesión</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
    }

    .container {
      display: flex;
      flex: 1;
    }

    .image-container {
      flex: 1;
      background: url('tu_imagen.jpg'); /* Reemplaza 'tu_imagen.jpg' con la URL o la ruta de tu imagen */
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .form-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    form {
      max-width: 400px;
      width: 100%;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form h2 {
      text-align: center;
    }

    form label {
      display: block;
      margin-bottom: 8px;
    }

    form input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    form button {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    form button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="image-container"></div>
    <div class="form-container">
      <form action="controlador_login.php" method="post">
        <h2>Iniciar Sesión</h2>
        <label for="username">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" value="ingresar">Iniciar Sesión</button>
      </form>
    </div>
  </div>
</body>
</html>

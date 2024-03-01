<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/assets/css/app.css">
  <link rel="shortcut icon" href="/public/assets/imgs/logo.ico" type="image/x-icon">
  <title>Página de Registro</title>
</head>
<body class="form-page">
  <p class="prev-page" id="prev-page">Atrás</p>
  <div class="form-container">
    <form action="/public/login_con_sesion/logica/registro.php" method="POST">
      <h2 class="form-title">Crear Cuenta</h2>
      <p>El único limite es tu imaginacion</p>
      <div class="form-content">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" required />
        </div>
        <div class="form-group">
          <label for="apellido">Primer Apellido</label>
          <input type="text" id="apellido" name="apellido" required />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="dni">DNI</label>
          <input type="text" id="dni" name="dni" pattern="[0-9]{8}[A-Za-z]{1}" minlength="9" maxlength="9" title="Debe poner 8 números y una letra" required />
        </div>
        <div class="form-group">
          <label for="clave">Contraseña</label>
          <input type="password" id="clave" name="clave" title="Introduce una contraseña de mas de 5 caracteres"  minlength="5" required />
        </div>
        <div class="form-group">
          <label for="compra">Pais</label>
          <select id="pais" name="pais" required>
            <option value="" disabled selected></option>
            <option value="españa">España</option>
            <option value="china">China</option>
            <option value="francia">Francia</option>
            <option value="japon">Japón</option>
            <option value="alemania">Alemania</option>
            <option value="eeuu">EEUU</option>
          </select>
        </div>
      </div><!-- form-content -->
      <button type="submit">Crear</button>
    </form>
  </div>
  <script src="/public/assets/js/main.js" type="module"></script>
</body>
</html>

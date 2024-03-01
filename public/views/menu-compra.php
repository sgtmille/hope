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
    <form action="/public/login_con_sesion/logica/compra.php" method="POST">
      <h2 class="form-title">Menú de Compra</h2>
      <p>El único limite es tu imaginacion</p>
      <div class="form-content">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" required />
        </div>
        <div class="form-group">
          <label for="apellido">Apellidos</label>
          <input type="text" id="apellido" name="apellido" required />
        </div>
        <div class="form-group">
            <label for="email">Email de contacto</label>
            <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="dni">DNI</label>
          <input type="text" id="dni" name="dni" pattern="[0-9]{8}[A-Za-z]{1}" minlength="9" maxlength="9" title="Debe poner 8 números y una letra" required />
        </div>
        <div class="form-group">
          <label for="id_producto">Seleccione producto</label>
          <select id="id_producto" name="id_producto" required>
            <option value="" disabled selected></option>
            <option value="vr_basic">Gafas Vr Basic</option>
            <option value="vr_pro">Gafas Vr Pro</option>
            <option value="traje">Traje Vr</option>
            <option value="guantes">Guantes Vr</option>
          </select>
        </div>
        <div class="form-group">
          <label for="tienda">¿Recogida en tienda?</label>
          <select id="tienda" name="tienda" required>
            <option value="" disabled selected></option>
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>
      </div><!-- form-content -->
      <button type="submit">Finalizar</button>
    </form>
  </div>
  <script src="/public/assets/js/main.js" type="module"></script>
</body>
</html>
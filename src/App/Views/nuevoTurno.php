<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require "Elements/head.php"; ?>
    <link href="css/turnos.css" rel="stylesheet">
  </head>
  <body>
    <?php require "Elements/header.php"; ?>
    <main>
      <h2>Solicitar turno</h2>
      <p id="resultado-formulario" class="<?= ($formSuccess ?? true) ? "mensaje-exito" : "mensaje-error" ?>">
        <?= $formMessage ?? "" ?>
      </p>
      <form action="" method="POST">
        <div>
          <label for="name-field">Nombre y apellido</label>
          <input type="text" id="name-field" name="name" required>
        </div>
        <div>
          <label for="phone-field">Teléfono celular</label>
          <input type="tel" id="phone-field" name="phone" placeholder="Sin 0 ni 15, solo dígitos" required>
        </div>
        <div>
          <label for="email-field">Correo</label>
          <input type="email" id="email-field" name="email" placeholder="correo@ejemplo.com" required>
        </div>
        <div>
          <label for="birthdate-field">Fecha de nacimiento</label>
          <input type="date" id="birthdate-field" name="birthdate" required>
        </div>
        <div>
          <label for="turn-date-field">Fecha del turno</label>
          <input type="date" id="turn-date-field" name="turn-date" required>
        </div>
        <div>
          <label for="turn-time-field">Hora del turno</label>
          <input type="time" id="turn-time-field" name="turn-time" required>
        </div>
        <div class="acciones-formulario">
          <button type="submit">Solicitar</button>
          <button type="reset">Limpiar</button>
        </div>
      </form>
    </main>
    <?php require "Elements/footer.php"; ?>
  </body>
</html>

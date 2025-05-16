<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require "Elements/head.php"; ?>
    <link href="css/turnos.css" rel="stylesheet">
  </head>
  <body>
    <?php require "Elements/header.php"; ?>
    <main>
      <h2>Turnos solicitados</h2>
      <p id="resultado-formulario" class="<?= ($formSuccess ?? true) ? "mensaje-exito" : "mensaje-error" ?>">
        <?= $formMessage ?? "" ?>
      </p>
      <form class="filtros" action="" method="POST">
        <p>Filtrar por fecha:</p>
        <div>
          <label for="date-from-field">Desde</label>
          <input type="date" id="date-from-field" name="date-from">
        </div>
        <div>
          <label for="date-to-field">Hasta</label>
          <input type="date" id="date-to-field" name="date-to">
        </div>
        <div>
          <button type="submit">Aplicar</button>
        </div>
      </form>
      <div class="tabla-responsiva">
        <table>
          <thead>
            <tr>
              <th>Nombre y apellido</th>
              <th>Teléfono celular</th>
              <th>Correo</th>
              <th>Fecha de nacimiento</th>
              <th>Fecha del turno</th>
              <th>Hora del turno</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $turno): ?>
              <tr>
                <td><?= $turno["nombreApellido"] ?></td>
                <td><?= $turno["telefonoCelular"] ?></td>
                <td><?= $turno["correo"] ?></td>
                <td><?= $turno["fechaNacimiento"] ?></td>
                <td><?= $turno["fechaTurno"] ?></td>
                <td><?= $turno["horaTurno"] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
    <?php require "Elements/footer.php"; ?>
  </body>
</html>

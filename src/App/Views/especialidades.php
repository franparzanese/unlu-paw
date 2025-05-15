<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require "Elements/head.php"; ?>
    <link href="css/general.css" rel="stylesheet">
  </head>
  <body>
    <?php require "Elements/header.php"; ?>
    <main>
      <h2>Especialidades</h2>
      <form class="busqueda" action="#" method="GET">
        <div>
          <label for="search-field">Buscar especialidad</label>
          <input type="text" id="search-field" name="search">
        </div>
        <button type="submit">Aplicar</button>
      </form>
      <ul class="lista-flex">
        <?php foreach ($data as $especialidad): ?>
          <li><a class="item-especialidad" href="/especialidad?id=<?= $especialidad["id"] ?>">
            <?= $especialidad["nombre"] ?>
          </a></li>
        <?php endforeach; ?>
      </ul>
    </main>
    <?php require "Elements/footer.php"; ?>
  </body>
</html>

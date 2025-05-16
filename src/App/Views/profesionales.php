<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require "Elements/head.php"; ?>
    <link href="css/general.css" rel="stylesheet">
  </head>
  <body>
    <?php require "Elements/header.php"; ?>
    <main>
      <h2>Profesionales</h2>
      <form class="busqueda" action="#" method="GET">
        <div>
          <label for="search-field">Buscar profesional</label>
          <input type="text" id="search-field" name="search">
        </div>
        <button type="submit">Aplicar</button>
      </form>
      <ul class="lista-flex">
        <?php foreach ($data as $profesional): ?>
          <li><a class="item-profesional" href="/profesional?id=<?= $profesional["id"] ?>"><div>
            <img src="img/profesionales/<?= $profesional["pathImagen"] ?>" alt="<?= $profesional["nombre"] ?> <?= $profesional["apellido"] ?>">
            <h4><?= $profesional["nombre"] ?> <?= $profesional["apellido"] ?></h4>
            <h5><?= $profesional["disciplina"]["nombre"] ?></h5>
          </div></a></li>
        <?php endforeach; ?>
      </ul>
    </main>
    <?php require "Elements/footer.php"; ?>
  </body>
</html>

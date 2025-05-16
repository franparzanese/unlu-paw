<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require "Elements/head.php"; ?>
    <link href="css/especialidad.css" rel="stylesheet">
  </head>
  <body>
    <?php require "Elements/header.php"; ?>
    <main>
      <h2><?= $data["nombre"] ?></h2>
      <p class="parrafo-contenido"><?= $data["descripcion"] ?></p>
      <section class="profesionales">
        <h3>Profesionales</h3>
        <ul class="lista-flex">
          <?php foreach ($data["profesionales"] as $profesional): ?>
            <li><a class="item-profesional" href="/profesional?id=<?= $profesional["id"] ?>"><div>
              <img src="img/profesionales/<?= $profesional["pathImagen"] ?>" alt="<?= $profesional["nombre"] ?> <?= $profesional["apellido"] ?>">
              <h4><?= $profesional["nombre"] ?> <?= $profesional["apellido"] ?></h4>
              <h5><?= $data["nombre"] ?></h5>
            </div></a></li>
          <?php endforeach; ?>
        </ul>
      </section>
    </main>
    <?php require "Elements/footer.php"; ?>
  </body>
</html>

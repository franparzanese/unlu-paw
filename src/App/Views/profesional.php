<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require "Elements/head.php"; ?>
    <link href="css/profesional.css" rel="stylesheet">
  </head>
  <body>
    <?php require "Elements/header.php"; ?>
    <main>
      <h2><?= $data["nombre"] ?> <?= $data["apellido"] ?></h2>
      <h3><?= $data["disciplina"]["nombre"] ?></h3>
      <img src="img/profesionales/<?= $data["pathImagen"] ?>" alt="<?= $data["disciplina"]["nombre"] ?>">
    </main>
    <?php require "Elements/footer.php"; ?>
  </body>
</html>

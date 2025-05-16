<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require "Elements/head.php"; ?>
    <link href="css/general.css" rel="stylesheet">
  </head>
  <body>
    <?php require "Elements/header.php"; ?>
    <main>
      <h2>Error 404</h2>
      <p class="parrafo"><?= $message ?? "La página que intentas ver no existe." ?></p>
    </main>
    <?php require "Elements/footer.php"; ?>
  </body>
</html>

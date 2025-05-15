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
          <li><a class="item-profesional" href="../profesionales/mamarchese.html"><div>
            <img src="img/profesionales/mamarchese.svg" alt="Mario Alfredo Marchese">
            <h4>Mario Alfredo Marchese</h4>
            <h5>Dermatología</h5>
          </div></a></li>
          <li><a class="item-profesional" href="../profesionales/lmgagliardi.html"><div>
            <img src="img/profesionales/lmgagliardi.svg" alt="Lena Marisa Gagliardi">
            <h4>Lena Marisa Gagliardi</h4>
            <h5>Dermatología</h5>
          </div></a></li>
        </ul>
      </section>
    </main>
    <?php require "Elements/footer.php"; ?>
  </body>
</html>

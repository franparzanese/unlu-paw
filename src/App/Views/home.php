<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require "Elements/head.php"; ?>
    <link href="css/index.css" rel="stylesheet">
  </head>
  <body>
    <?php require "Elements/header.php"; ?>
    <main>
      <div id="carrusel">
        <img src="img/banner-1.jpg" alt="Banner">
        <img src="img/banner-2.jpg" alt="Banner">
        <img src="img/banner-3.jpg" alt="Banner">
      </div>
      <div id="novedades">
        <article>
          <a href="/novedad?id=1">
            <img src="img/novedades/jornada-prevencion-cardiovascular.png" alt="Jornada de prevención cardiovascular">
          </a>
          <div>
            <h3><a href="/novedad?id=1">Compartimos una nueva edición de la jornada de prevención cardiovascular</a></h3>
            <p>El sábado 26 de abril se llevó a cabo en nuestro centro de salud la jornada de prevención cardiovascular. Más de 150 asistentes participaron de este encuentro que combinó ciencia, experiencia y emoción en un espacio de aprendizaje y reflexión sobre el cuidado integral de la salud.</p>
          </div>
        </article>
        <article>
          <a href="/novedad?id=2">
            <img src="img/novedades/unidos-por-inclusion.jpg" alt="Unidos por la inclusión">
          </a>
          <div>
            <h3><a href="/novedad?id=2">¡Unidos por la inclusión!</a></h3>
            <p>El viernes pasado, nuestro centro de salud fue sede de una jornada muy especial organizada por familias de Chivilcoy, con el objetivo de fortalecer la red de familias de jóvenes y niños con síndrome de Down. Madres, padres y familias compartieron experiencias, preguntas, desafíos y esperanzas.</p>
          </div>
        </article>
      </div>
    </main>
    <?php require "Elements/footer.php"; ?>
  </body>
</html>

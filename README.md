# unlu-paw

Trabajos prácticos de la asignatura "Programación en Ambiente Web" de la Universidad Nacional de Luján.

## Introducción

A lo largo de todos los trabajos prácticos se construirá la web de una empresa denominada "UNLuPAW", una institución de salud que permite a los pacientes conocer las especialidades del lugar y solicitar turnos.

## Esquema de versionado

Los trabajos prácticos se encuentran divididos en 5 enunciados que van incrementando la funcionalidad y la estética del sitio web. Se generarán versiones de este proyecto a medida que se vayan completando los enunciados, conforme a la siguiente tabla:

| Enunciado                       | Versión  | Entregado |
|:-------------------------------:|:--------:|:---------:|
| [TP 1](docs/enunciados/tp1.pdf) | `v0.1.0` | ✅         |
| [TP 2](docs/enunciados/tp2.pdf) | `v0.2.0` | ✅         |
| [TP 3](docs/enunciados/tp3.pdf) | `v0.3.0` | ✅         |
| [TP 4](docs/enunciados/tp4.pdf) | `v0.4.x` | -         |
| [TP 5](docs/enunciados/tp5.pdf) | `v1.0.x` | -         |

## Ejecutar localmente

1. Copiar el fichero `.env.example` a `.env` y configurar las variables según sea necesario.
2. Levantar los contenedores con el comando `docker compose up`.
3. Instalar las dependencias con el comando `composer install`.
4. Aplicar las migraciones de la base de datos con el comando `docker compose exec -it web vendor/bin/phinx migrate`.

Esto iniciará un webserver y una base de datos.

## Diseño

### Mapa del sitio

![Mapa del sitio](docs/img/site_map.png)

### Wireframes

[Link al Figma](https://www.figma.com/design/z7gvCERG3qwI8cQ2rNJfJe/unlu-paw?node-id=0-1&t=DjNWNwiLrSGaraYQ-1)

## Consideraciones

* En el formulario de solicitud de turno no se incluirá el campo para la edad (solicitado en el [TP 1](docs/enunciados/tp1.pdf)) dado que es un valor calculado a partir de la fecha de nacimiento y la fecha actual (obtenida del servidor web).
* Se utilizó la fuente "Regencie" en lugar de "Gotham" (solicitada en el [TP 2](docs/enunciados/tp2.pdf)) dado que la misma ya no está disponible, y la nueva fuente es similar.

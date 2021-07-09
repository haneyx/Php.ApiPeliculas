## Simple API connection with 'Peliculas' database
### 1. Crear Base de datos 'peliculas' en XAMPP usando
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE DATABASE peliculas;

CREATE TABLE peliculas.pelicula (
  id INT(8) AUTO_INCREMENT NOT NULL,
  nombre VARCHAR(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
  anio int(4) NOT NULL ,
  PRIMARY KEY(id)
) ENGINE = INNODB CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO peliculas.pelicula(nombre,anio) VALUES ("Deadpool",2010);

INSERT INTO peliculas.pelicula(nombre,anio) VALUES ("Cenicienta",2008);

INSERT INTO peliculas.pelicula(nombre,anio) VALUES ("X-Men",2003);

INSERT INTO peliculas.pelicula(nombre,anio) VALUES ("Ralph",2007);

INSERT INTO peliculas.pelicula(nombre,anio) VALUES ("Bambi",2000);

INSERT INTO peliculas.pelicula(nombre,anio) VALUES ("Cruella",2019);

### 2. Ejecutar los archivos php en servidor y voila!

#### Ejemplo Simple de API por Mg. Sc. Harold Coila

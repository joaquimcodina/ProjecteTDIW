-----------------------------------------
-- Script: Database.sql
-- Tecnologies de Desenvolupament per a Internet i Web
-- Curs: 2021-2022
-- Grau en Enginyeria Informàtica
-----------------------------------------
--
-- Aquest script:
--
--        1) Crea les taules de la base de dades
--        2) Assigna les PK i FK de cada taula
--

DROP DATABASE IF EXISTS tdiw;

CREATE DATABASE tdiw;

USE tdiw;

CREATE TABLE USUARIS(
    id_usuari    INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom_usuari   VARCHAR(55) NOT NULL,
    correu       VARCHAR(150) NOT NULL,
    password     VARCHAR(125) NOT NULL,
    adreça       VARCHAR(250) NOT NULL,
    poblacio     VARCHAR(125) NOT NULL,
    codi_postal  INTEGER NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE ARTISTES(
    id_artista      INTEGER NOT NULL PRIMARY KEY,
    nom_artista     VARCHAR(125) NOT NULL,
    data_naixement  DATE NOT NULL,
    localitat       VARCHAR(125) NOT NULL,
    foto            VARCHAR(255) NOT NULL,
    biografia       VARCHAR(255)
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE CATEGORIES(
    id_categoria   INTEGER NOT NULL PRIMARY KEY,
    nom_categoria  VARCHAR(55) NOT NULL,
    foto           VARCHAR(255) NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE ALBUMS(
   id_album INTEGER NOT NULL PRIMARY KEY,
   nom_album VARCHAR(150) NOT NULL,
   preu DOUBLE NOT NULL,
   unitats INTEGER,
   en_stock CHAR(1) NOT NULL,
   foto     VARCHAR(255) NOT NULL,
   discografia VARCHAR(125),
   playlist    VARCHAR(255),
   descripcio  VARCHAR(255),
   id_categoria  INTEGER NOT NULL,
   id_artista      INTEGER NOT NULL,
   FOREIGN KEY (id_artista) REFERENCES ARTISTES (id_artista)
    ON DELETE CASCADE
    ON UPDATE RESTRICT,
   FOREIGN KEY (id_categoria) REFERENCES CATEGORIES (id_categoria)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE COMANDES(
    id_comanda         INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    data               DATE NOT NULL,
    num_productes      INTEGER NOT NULL,
    id_usuari  INTEGER NOT NULL,
    FOREIGN KEY (id_usuari) REFERENCES USUARIS (id_usuari)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
) ENGINE = INNODB DEFAULT CHARSET = utf8;

CREATE TABLE LINIACOMANDA(
    id_liniacomanda      INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    preu_total_linia     INTEGER NOT NULL,
    unitats              INTEGER NOT NULL,
    id_album      	 	 INTEGER NOT NULL,
    id_comanda		 	 INTEGER NOT NULL,
    FOREIGN KEY (id_album) REFERENCES ALBUMS (id_album)
    ON DELETE CASCADE
    ON UPDATE RESTRICT,
    FOREIGN KEY (id_comanda) REFERENCES COMANDES (id_comanda)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
) ENGINE = INNODB DEFAULT CHARSET = utf8;